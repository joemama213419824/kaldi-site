<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Under Construction - Karo Language Learning Institute</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      text-align: center;
      margin: 0;
      padding: 0;
    }

    .uc-container {
      max-width: 600px;
      margin: 100px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .uc-container img {
      width: 100%;
      max-width: 400px;
      height: auto;
    }

    .uc-container h2 {
      color: #8B4513;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .uc-container p {
      color: #333;
      margin-bottom: 20px;
    }

    .uc-container a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #8B4513;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    .uc-container a:hover {
      background-color: #a15a1c;
    }
    body.dark-mode {
      background-color: #333;
      color: #fff;
    }

    /* Navbar Styles */
    .navbar {
      background-color: #8B4513;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .navbar-logo {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #fff;
    }

    .navbar-logo img {
      height: 30px;
      margin-right: 10px;
      order: 1;
    }

    .navbar-logo .navbar-title {
      order: 2;
    }

    .navbar-menu {
      display: flex;
      align-items: center;
      order: 3;
    }

    .navbar-menu ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
    }

    .navbar-menu ul li {
      margin-right: 15px;
      position: relative;
    }

    .navbar-menu ul li a {
      color: #fff;
      text-decoration: none;
    }

    .navbar-menu ul li a:hover {
      color: #a15a1c;
    }

    .navbar-text {
      display: none;
      text-align: center;
      color: #fff;
      margin-top: 20px;
      width: 100%;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #8B4513;
      min-width: 160px;
      z-index: 1;
    }

    .dropdown-content a {
      color: #fff;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .navbar-menu ul li:hover .dropdown-content {
      display: block;
    }

    .navbar-toggle {
      display: none;
      font-size: 24px;
      cursor: pointer;
      order: 4;
    }

    .menu-container {
      display: none;
      background-color: #a15a1c;
      padding: 20px;
      color: #fff;
    }

    .menu-container ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .menu-container ul li {
      margin-bottom: 10px;
      position: relative;
    }

    .menu-container ul li a {
      color: #fff;
      text-decoration: none;
    }

    /* Separate styling for menu items within .menu-container */
    .menu-container ul li a:hover {
      background-color: #8B4513;
    }

    .menu-container .dropdown-content {
      position: static;
      display: none;
      background-color: transparent;
      min-width: auto;
      margin-left: 15px;
      margin-top: -10px;
    }

    .menu-container .dropdown-content a {
      padding: 10px;
    }

    /* Table Styles */
    .product-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .product-table th,
    .product-table td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    .product-table th {
      background-color: #f2f2f2;
    }

    .product-table tr:hover {
      background-color: #f5f5f5;
    }

    /* About Us Styles */
    .about-section {
      background-color: #f2f2f2;
      padding: 20px;
    }

    .about-section h2 {
      color: #8B4513;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .about-section p {
      color: #333;
    }

    /* Our Services Styles */
    .services-section {
      background-color: #fff;
      padding: 20px;
    }

    .services-section h2 {
      color: #8B4513;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .services-section p {
      color: #333;
    }

    @media (max-width: 768px) {
      .navbar-logo img {
        height: 24px;
      }

      .navbar-menu ul {
        display: none;
      }

      .navbar-toggle {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        width: 30px;
        height: 24px;
        margin-left: 10px;
        order: 3;
      }

      .navbar-toggle .line {
        width: 100%;
        height: 2px;
        background-color: #fff;
        transition: background-color 0.3s;
      }

      .navbar-toggle.active .line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
      }

      .navbar-toggle.active .line:nth-child(2) {
        opacity: 0;
      }

      .navbar-toggle.active .line:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
      }

      .navbar-menu.responsive {
        display: flex;
        flex-direction: column;
        background-color: #8B4513;
        position: absolute;
        top: 100%;
        right: 0;
        width: 100%;
        order: 4;
      }

      .navbar-menu.responsive .navbar-text {
        display: block;
        margin-top: 10px;
      }

      .navbar-menu.responsive ul li {
        margin-right: 0;
        margin-bottom: 10px;
      }

      .navbar-menu.responsive .dropdown-content {
        position: static;
        display: none;
        background-color: transparent;
      }

      .navbar-menu.responsive .dropdown-content a {
        padding: 10px;
      }

      .menu-container {
        display: none;
      }

      .menu-container.show {
        display: block;
      }

      .menu-container ul li {
        margin-bottom: 10px;
      }
    }

    /* Existing styles... */

  </style>
</head>
<body>
  <div class="uc-container">
    <img src="images/undeerconstruction.jpg" alt="Under Construction">
    <h2>We're Under Construction</h2>
    <p>The Resources is currently under construction. Please check back later!</p>
    <p>Please click <a href="index.php">here</a> to go back.</p>
  </div>

  <script>
    // JavaScript code from the existing snippet...
  </script>
</body>
</html>
