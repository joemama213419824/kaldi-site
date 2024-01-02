<?php
    session_start();
    require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            color: #007bff;
            font-weight: bold;
        }

        .navbar-toggler-icon {
            background-color: transparent;
        }

        .navbar-toggler {
            border: 2px solid #007bff;
        }

        .navbar-toggler-icon {
            background-color: transparent;
        }

        .navbar-toggler:focus,
        .navbar-toggler:hover {
            background-color: transparent;
        }

        .navbar-toggler-bar {
            width: 30px;
            height: 3px;
            background-color: transparent;
            margin: 6px 0;
            transition: 0.4s;
        }

        .navbar-toggler:hover .navbar-toggler-bar {
            background-color: transparent;
        }

        .navbar-nav .nav-link {
            color: #495057;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        .contact-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 100px 10px;
        }

        .contact-header h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .contact-header p {
            font-size: 1em;
        }

        .contact-content {
            padding: 20px 10px;
            text-align: center;
            flex: 1;
        }

        .contact-form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
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
        .form-field input[type="email"],
        .form-field textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-field textarea {
            resize: vertical;
        }

        .submit-button {
            background-color: #0078d4;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #005ea2;
        }

        .contact-footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 10px;
            margin-top: auto; 
        }

        .social-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: #007bff; /* Adjust color as needed */
            transition: color 0.3s;
            margin-top: 20px; /* Add margin as needed */
        }


        .social-icons a {
            margin: 0 20px; /* Adjust margin for spacing */
        }

        .social-icon:hover {
            color: #007bff; /* Change to the color you prefer on hover */
        }

        @media (max-width: 767px) {
            .navbar-toggler {
                display: block;
                background-color: transparent;
                border: none;
                cursor: pointer;
                font-size: 24px;
                color: #007bff;
                margin-right: 15px;
            }

            .navbar-toggler:hover {
                color: #0056b3;
            }

            .navbar-toggler-icon {
                display: none;
            }

            .navbar-nav {
                flex-direction: column;
            }

            .navbar-nav .nav-item {
                margin-right: 0;
            }

            .navbar-nav .nav-link {
                padding: 15px 0;
                color: #495057;
            }

            .navbar-nav .nav-link:hover {
                color: #007bff;
            }

            .hover-section {
                flex-direction: row;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">KALDI</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            &#9776;
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        About KALDI
                    </a>
                    <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <a class="dropdown-item" href="Vission.php">Vision, Mission and Objectives</a>
                        <a class="dropdown-item" href="evolution.php">Evolution of KALDI</a>
                        <a class="dropdown-item" href="founders.php">KALDI Founders</a>
                        <a class="dropdown-item" href="#">KALDI Board</a>
                        <a class="dropdown-item" href="#">Structure and Organs of KALDI</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">What We Do</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">The Karo People of South Sudan</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="mediaDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        News and Media
                    </a>
                    <div class="dropdown-menu" aria-labelledby="mediaDropdown">
                        <a class="dropdown-item" href="news.php">News</a>
                        <a class="dropdown-item" href="#">Press Releases</a>
                        <a class="dropdown-item" href="photogallery.php">Photo Gallery</a>
                        <a class="dropdown-item" href="downloads.php">Downloads</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="resourcesDropdown">
                        <a class="dropdown-item" href="dictionary.php">Karo-English Dictionary (Ko’dot)</a>
                        <a class="dropdown-item" href="#">Declaration of the Karo People</a>
                        <a class="dropdown-item" href="intellectual.php">Karo Intellectuals Platform</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Karo Hall of Fame</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="contact-header">
        <h1>Contact Karo Language Development Institute </h1>
        <p>Get in touch with us for any questions or inquiries.</p>
    </div>

<!-- Contact Form -->
<div class="contact-form">
    <form method="post" action="send_email.php">
        <?php
        $token = bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $token;
        ?>
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($token); ?>">
        
        <div class="form-field">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-field">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-field">
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="submit-button">Send Message</button>
    </form>
</div>

<!-- Footer -->
<?php
include 'footer.php';
?>
<!-- Footer -->

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function toggleNavbar() {
            var navbar = document.querySelector('.navbar-toggler-icon');
            navbar.classList.toggle('collapsed');
        }
    </script>
</body>


</html>
