<?php
  $filename = 'install.php';
  if (file_exists($filename)) {
      echo "<h1> 404 Error Connection </h1>";
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FEEs</title>
    <link rel="stylesheet" href="css/Fees_css.css">
    <link rel="icon" type="image/png" href="Image/favicon.png">

  </head>

  <header>
    <!-- Logo and navbar -->
    <div class="nav">
      <ul class="logo"><a href="index.php"><img src="Image/Malllogo.png" width="200px" ></a></ul>

      <ul class="Searchbar">
          <input type="search" id="search" placeholder="Search..." />
      </ul>

      <ul class="Nav-list">
          <li class="Nav-item">
            <a href = 'About-us.php' title = "About us"> About us</a>
          </li>
          <li class="Nav-item">
            <a href = "Fees.php" title = "Fees ">Fees</a>
          </li>
          <li class="Nav-item">
            <a href = "Contact.php" title = "Contact"> Contact</a>
          </li>
          <li class="Nav-item">
            <a href = "FAQs.php" title = "FAQs"> FAQs</a>
          </li>
          <li class="Nav-item">
            <a href = "Login.php" title = "Sign in"> Sign in</a>
          </li>
          <li class="Nav-item">
          <a href = "Registration form.php" title = "Sign up"> Sign up</a>
          </li>
      </ul>
    </div>
  </header>

  <body>
  <main>
    <!-- table_1 -->
    <div class="columns">
    <ul class="price">
      <li class="header"> Store owners</li>
      <li class="grey">$ 999.99 / year</li>
      <li><strong>Monthly Renting Fee:</strong> 987.789$</li>
      <li><strong>Monthly Parking:</strong> 100$</li>
      <li><strong>Daily Parking:</strong> 9.99$</li>
      <li class="grey"><a href="Registration form.php" class="button">Sign Up</a></li>
    </ul>
  </div>
  <!-- table_2 -->
  <div class="columns">
  <ul class="price">
    <li class="header"> Shopper</li>
    <li class="grey">$ 99.99 / year</li>
    <li><strong>Monthly Renting Fee:</strong> 321.123$</li>
    <li><strong>Monthly Parking:</strong> 150$</li>
    <li><strong>Daily Parking:</strong> 15.99$</li>
    <li class="grey"><a href="Registration form.php" class="button">Sign Up</a></li>
  </ul>
</div>
<!-- table_3 -->
<div class="columns">
<ul class="price">
  <li class="header"> VIP member</li>
  <li class="grey">$ 69.96 / year</li>
  <li><strong>Monthly Renting Fee:</strong> 123.321$</li>
  <li><strong>Monthy Parking:</strong> 120$</li>
  <li><strong>Daily Parking:</strong> 10.99$</li>
  <li class="grey"><a href="Registration form.php" class="button">Sign Up</a></li>
</ul>
</div>
<div id="consent-popup" class="cookies">
  <H1>I uses Cookie</H1>
  <h3>My website uses cookies necessary for its basic functioning. By continuing browsing, you consent to my use of
    cookies and other technologies.</h3>
  <div class="interaction">
    <input type="button" value="I understand" class="popup" id="accept">
    <a href="private.php">Learn more</a>
  </div>
</div>
  </main>
  </body>

  <footer>

    <!-- Bottom nav menu -->
    <div class="Bottom-nav">
      <div class = "footer-content">
        <ul>
          <li class="footer-item">
            <a href = "index.php" title = "Home"> Home</a>
          </li class="footer-item">
          <li class="footer-item">
            <a href = "FAQs.php" title = "FAQs"> FAQs</a>
          </li class="footer-item">
          <li class="footer-item">
            <a href = "About-us.php" title = "About"> About</a>
          </li class="footer-item">
          <li class="footer-item">
            <a href = "copyright.php" title = "Copyright"> Copyright</a>
          </li class="footer-item">
          <li class="footer-item">
            <a href = "ToS.php" title = "Term"> Term of Service </a>
          </li>
          <li class="footer-item">
            <a href = "private.php" title = "Privacy Policy"> Privacy Policy</a>
          </li>
        </ul>
      </div>
    <div class = "footer-descript">
      RMIT University, April 8th 2019
    </div>
  </div>
  <script type="text/javascript" src="js/cookie.js"></script>
  </footer>


</html>
