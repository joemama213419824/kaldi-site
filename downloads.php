<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karo Language Development Institute - Downloads</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
          body {
              display: flex;
              flex-direction: column;
              min-height: 100vh;
          }

          .downloads-section {
              flex: 1;
          }

          .landing-footer {
              margin-top: auto; /* Push the footer to the bottom */
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

        .landing-header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 100px 10px;
        }

        .landing-header h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .landing-header p {
            font-size: 1em;
        }

        .landing-content {
            padding: 20px 10px;
            text-align: center;
            flex: 1;
        }

        .hover-section {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
        }

        .hover-box {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            margin: 10px;
        }

        .hover-box:hover {
            background-color: #f8f9fa;
            transform: scale(1.05);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .hover-box h3 {
            margin-bottom: 10px;
            color: #007bff; /* Set the color you prefer */
        }

        .hover-box p {
            color: #495057; /* Set the color you prefer */
        }

        .landing-content h2 {
            margin-top: 30px;
        }

        .about-section {
            padding: 20px 10px;
            text-align: center;
        }

        .about-subsection {
            margin-top: 30px;
        }

        .landing-footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 10px;
        }

        .landing-content h2 {
            margin-top: 30px;
        }

        .landing-header .btn-primary {
            background-color: #ff6600;
            border-color: #ff6600;
        }

        .landing-header .btn-primary:hover {
            background-color: #cc5200;
            border-color: #cc5200; 
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
                        <a class="dropdown-item" href="#">Downloads</a>
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


    <div class="downloads-section">
        <div class="container">
            <h2>Downloads</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">File 1</h5>
                            <p class="card-text">Description of File 1.</p>
                            <a href="#" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">File 2</h5>
                            <p class="card-text">Description of File 2.</p>
                            <a href="#" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">File 3</h5>
                            <p class="card-text">Description of File 3.</p>
                            <a href="#" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">File 4</h5>
                            <p class="card-text">Description of File 4.</p>
                            <a href="#" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">File 5</h5>
                            <p class="card-text">Description of File 5.</p>
                            <a href="#" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">File 6</h5>
                            <p class="card-text">Description of File 6.</p>
                            <a href="#" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
                <!-- Add more cards for additional files -->
            </div>
        </div>
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
