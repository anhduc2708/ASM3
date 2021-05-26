<!DOCTYPE html>
<html lang= "en">
  <head>
    <meta charset = "utf-8">
    <title> Home Page</title>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "css/HomepageStylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="Image/favicon.png">
    <script type="text/javascript" src="js/cookie.js"></script>

  </head>

  <header>

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

  <div class="large-container">
    <div class="row">
      <div class="col">
        <h1>The best shopping experience that you ever have!</h1>
          <a href="#" class="button">Explore Now &#8594;</a>
      </div>
      <div class="col">
        <img src="Image/mall.png">
      </div>
    </div>

    </div>

  <!-- <div class="small-container"> -->
<div class="small-container">

    <h2>New Product</h2>
      <ul  onmouseover="stop()" onmouseout="continuing()" id="ProductScrolling">

        <li >
          <div class="gallery">
          <img src="Image/cap1.png" alt="Shoe" width="200px" height="200px">
          <div class="desc">Add a description of the image here</div>
          </div>
        </li>

        <li>
          <div class="gallery">
          <img src="Image/cap3.png" alt="Shoe" width="200px" height="200px">
          <div class="desc">Add a description of the image here</div>
          </div>
        </li>

        <li>
          <div class="gallery">
          <img src="Image/cap1.png" alt="Shoe" width="200px" height="200px">
          <div class="desc">Add a description of the image here</div>
          </div>
        </li>

        <li>
          <div class="gallery">
          <img src="Image/cap2.png" alt="Shoe" width="200px" height="200px">
          <div class="desc">Add a description of the image here</div>
          </div>
        </li>

        <li>
          <div class="gallery">
          <img src="Image/cap4.png" alt="Shoe" width="200px" height="200px">
          <div class="desc">Add a description of the image here</div>
          </div>
        </li>

        <li>
          <div class="gallery">
          <img src="Image/cap1.png" alt="Shoe" width="200px" height="200px">
          <div class="desc">Add a description of the image here</div>
          </div>
        </li>

        <li>
          <div class="gallery">
          <img src="Image/cap1.png" alt="Shoe" width="200px" height="200px">
          <div class="desc">Add a description of the image here</div>
          </div>
        </li>

        <li>
          <div class="gallery">
          <img src="Image/cap1.png" alt="Shoe" width="200px" height="200px">
          <div class="desc">Add a description of the image here</div>
          </div>
        </li>

        <li>
          <div class="gallery">
          <img src="Image/cap1.png" alt="Shoe" width="200px" height="200px">
          <div class="desc">Add a description of the image here</div>
          </div>
        </li>
        
      </ul>




  </div>



      <div id="consent-popup" class="cookies">
        <H1>I uses Cookie</H1>
        <h3>My website uses cookies necessary for its basic functioning. By continuing browsing, you consent to my use of cookies and other technologies.</h3>
          <div class="interaction">

            <input type = "button" value ="I understand" class="popup" id="accept" >
            <a href="private.php">Learn more</a>

          </div>
      </div>

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
  </footer>

</html>
