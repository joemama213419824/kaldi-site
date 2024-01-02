<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="styling.css">
  <style>
    .navbar-menu .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .navbar-menu .dropdown-content a {
      color: #333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .navbar-menu .dropdown-content a:hover {
      background-color: #F7F8F9;
    }

    /* Show the dropdown menu on hover */
    .navbar-menu .dropdown:hover .dropdown-content {
      display: block;
    }
    /* Add styling for the About Us section */
    .about-us-section {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 5px;
      margin-top: 20px;
      text-decoration: none;
    }

    .about-us-section h2 {
      font-size: 24px;
      color: #333;
      margin-bottom: 10px;
      text-decoration: none;
    }

    .about-us-section p {
      font-size: 16px;
      color: #555;
      line-height: 1.6;
    }

    .about-us-section ul {
      margin-left: 20px;
    }

    .about-us-section ul li {
      font-size: 14px;
      color: #777;
      list-style: disc;
    }

    /* Add styling for the Mission section */
    .mission-section {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 5px;
      margin-top: 20px;
    }

    .mission-section h2 {
      font-size: 24px;
      color: #333;
      margin-bottom: 10px;
    }

    .mission-section p {
      font-size: 16px;
      color: #555;
      line-height: 1.6;
    }

    .mission-section ul {
      margin-left: 20px;
    }

    .mission-section ul li {
      font-size: 14px;
      color: #777;
      list-style: disc;
    }

    /* Add styling for the Latest News section */
    .news-section {
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 5px;
      margin-top: 20px;
    }

    .news-section h2 {
      font-size: 24px;
      color: #333;
      margin-bottom: 10px;
    }

    .news-article {
      border-bottom: 1px solid #ddd;
      margin-bottom: 20px;
      padding-bottom: 20px;
    }

    .news-article h3 {
      font-size: 18px;
      color: #555;
      margin-bottom: 10px;
    }

    .news-article p {
      font-size: 16px;
      color: #777;
      line-height: 1.6;
    }

    .news-article a {
      color: #0078d4;
      text-decoration: none;
      font-weight: bold;
    }

    .news-article a:hover {
      text-decoration: underline;
    }

  </style>
</head>
<body>
<nav class="navbar">
  <a href="images/KALDI Logo.jpg" class="navbar-logo">
    <img src="images/KALDI Logo.jpg" alt="Logo">
    <span class="navbar-title">KARO Language Development Institute</span>
  </a>
  <div class="navbar-toggle">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>
  <div class="navbar-menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li class="dropdown">
        <a href="aboutus.php">About</a>
        <div class="dropdown-content">
          <a href="Vission.php">Vision</a>
          <a href="evolution.php">Evolution</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="#">News and Media</a>
        <div class="dropdown-content">
          <a href="news.php">News</a>
          <a href="#">Press Release</a>
          <a href="photogallery.php">Photo Gallery</a>
          <a href="downloads.php">Downloads</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="resources.php">Resources</a>
        <div class="dropdown-content">
          <a href="#">Karo-English Dictionary</a>
          <a href="#">Declaration of the Karo People</a>
          <a href="#">Karo Intellectuals platform</a>
        </div>
      </li>
      <li><a href="contactus.php">Contact</a></li>
      <li><button id="darkModeToggle">Toggle Dark Mode</button></li>
    </ul>
  </div>
</nav>

<!-- Add the menu container below -->
<div class="menu-container">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="aboutus.php">About Us</a></li>
    <li><a href="news.php">News and Media</a></li>
    <li><a href="contactus.php">Contact Us</a></li>
  </ul>
</div>


<!-- Your About Us page content here -->
<div class="homepage-content">
  <section class="about-us-section">
    <h2>About Us</h2>
    <p>The KARO Language Development Institute is dedicated to preserving and promoting the rich language and culture of the Karo people.</p>
    <p>Our mission is to:</p>
    <ul>
      <li>Develop comprehensive language learning resources.</li>
      <li>Conduct linguistic research to document and understand the Karo language.</li>
      <li>Organize cultural events and workshops to celebrate our heritage.</li>
    </ul>
  </section>
</div>

<script>
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');
    const menuContainer = document.querySelector('.menu-container');
    const darkModeToggle = document.querySelector('#darkModeToggle');

    navbarToggle.addEventListener('click', () => {
    navbarToggle.classList.toggle('active');
    //navbarMenu.classList.toggle('responsive'); // Add or remove the 'responsive' class
    menuContainer.classList.toggle('show');
    navbarMenu.classList.toggle('show'); // Add this line
  });



    darkModeToggle.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      const darkModeButtonText = darkModeToggle.textContent;
      darkModeToggle.textContent = darkModeButtonText === 'Toggle Dark Mode' ? 'Toggle Light Mode' : 'Toggle Dark Mode';
    });
</script>
</body>
</html>
