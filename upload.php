<?php
require_once 'data_connect.php';

// Enable error reporting for troubleshooting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uploadResult = ''; // Initialize an empty result variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle file upload
    $targetDirectory = 'documents/';
    $originalFileName = $_FILES['file']['name'];
    $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);

    // Validate file type
    $allowedFileTypes = ['pdf', 'doc', 'docx']; // Add or modify allowed file extensions
    if (!in_array(strtolower($fileExtension), $allowedFileTypes)) {
        $uploadResult = 'Invalid file type. Only PDF, DOC, and DOCX files are allowed.';
    } else {
        // Limit file size (in bytes)
        $maxFileSize = 5 * 1024 * 1024;
        if ($_FILES['file']['size'] > $maxFileSize) {
            $uploadResult = 'File size exceeds the allowed limit.';
        } else {
            // Generate a unique and secure filename
            $uniqueFilename = uniqid('', true) . '.' . $fileExtension;
            $uploadedFile = $targetDirectory . $uniqueFilename;

            // Check for duplicate files
            $counter = 1;
            while (file_exists($uploadedFile)) {
                $uniqueFilename = uniqid('', true) . '_' . $counter . '.' . $fileExtension;
                $uploadedFile = $targetDirectory . $uniqueFilename;
                $counter++;
            }

            if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadedFile)) {
                try {
                    $pdo->beginTransaction();

                    // Insert file information into the 'uploads' table
                    $sql = "INSERT INTO uploads (file_name, description, upload_date) VALUES (?, ?, current_timestamp())";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$uploadedFile, $_POST['description']]);
                    $fileId = $pdo->lastInsertId();

                    // Calculate checksum (SHA-256)
                    $fileChecksum = hash_file('sha256', $uploadedFile);

                    // Insert file checksum into the 'uploads' table
                    $sql = "UPDATE uploads SET checksum = ? WHERE id = ?";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$fileChecksum, $fileId]);

                    // Verify uploaded file's integrity using checksum
                    $savedChecksum = hash('sha256', file_get_contents($uploadedFile));
                    if ($savedChecksum === $fileChecksum) {
                        $uploadResult = 'File uploaded successfully.';
                    } else {
                        $uploadResult = 'File upload successful, but the checksum verification failed. Please reupload the file.';
                    }

                    $pdo->commit();
                } catch (Exception $e) {
                    $pdo->rollBack();
                    $uploadResult = 'Transaction failed: ' . $e->getMessage();
                }
            } else {
                // File upload failed, handle the error
                $uploadResult = 'File upload failed.';
            }
        }
    }
} else {
    $uploadResult = 'Invalid request.';
}

echo $uploadResult;
?>
