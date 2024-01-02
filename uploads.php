<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KARO Language Development Institute - Uploads</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Add your custom styles here */

        /* Uploads Section */
        .uploads-section {
            background-color: #ecf0f1;
            padding: 40px;
            border-radius: 8px;
            margin-top: 40px;
            text-align: center;
        }

        .uploads-section h2 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        .upload-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .form-field {
            margin-bottom: 20px;
        }

        .form-field label {
            font-size: 18px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .form-field input[type="text"],
        .form-field input[type="file"] {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-field textarea {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

        .submit-button {
            background-color: #3498db;
            color: #fff;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<?php
include'nav.php';
?>
    <!-- Uploads Section -->
    <div class="uploads-section">
        <h2>Uploads</h2>

        <!-- Upload Form -->
        <div class="upload-form">
            <form id="uploadForm" enctype="multipart/form-data">
                <div class="form-field">
                    <label for="file">Select File</label>
                    <input type="file" name="file" id="file" required>
                </div>
                <div class="form-field">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="4" required></textarea>
                </div>
                <button type="button" class="btn btn-primary submit-button" onclick="uploadFile()">Upload</button>
            </form>
            <div id="uploadResult"></div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>
    <!-- Custom JavaScript for AJAX -->
    <script>
        function uploadFile() {
            var form = document.getElementById('uploadForm');
            var formData = new FormData(form);

            fetch('upload.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(result => {
                document.getElementById('uploadResult').innerHTML = result;
            })
            .catch(error => {
                console.error('Error during fetch:', error);
            });
        }
    </script>




    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
