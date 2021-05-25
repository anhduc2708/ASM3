<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Box Model</title>

    <link rel="stylesheet" href="css/cssofdetail.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
<link rel="icon" href="Image/download.png" type = "image/x-icon">

  </head>

  <body>

    <header>
      <img src="Image/Store logo.png" height="100%" width="150px"></img>
      <nav>
          <a href="index.php">Home</a>
          <a href="Store home page.php">Products</a>
          <a href="About-us.php">Contact Us</a>
        </nav>

    </header>

    <main>
      <!-- shoe name -->
          <h1>Phantom GT Academy FG</h1>

          <!--picture  -->
          <!-- The four columns -->
          <div class="row">
            <div class="column">
              <img src="Image/footballshoes2.png" alt="Diorshoe" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
              <img src="Image/footballshoes2.png" alt="Diorshoe" style="width:100%" onclick="myFunction(this);">
            </div>
            <div class="column">
              <img src="Image/footballshoes2.png" alt="Diorshoe" style="width:100%" onclick="myFunction(this);">
            </div>

          </div>

          <div class="container">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
            <img id="expandedImg" style="width:100%">
            <div id="imgtext"></div>
          </div>

          <script>
          function myFunction(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
          }
          </script>
          <center> <h2>Feel your Dream With Phantom GT</h2> </center>

          <img src="Image/footballshoes2.png" style="width:100%" height="800px">

          <h2> RECOMMEND PRODUCTS</h2>
          <div class="productimg">
      		<a target="_blank" href="Image/pic1.png">
      		<img src="Image/shoes4.png" alt="Shoe">
      		</a>
      	<div class="prices">250$</div>
      	<div class="prices">Nike Boost</div>
      	</div>

      	<div class="productimg">
      		<a target="_blank" href="detailpage.php">
      		<img src="Image/shoes2.png" alt="Shoe">
      		</a>
      	<div class="prices">300$</div>
      	<div class="prices">Nike Force</div>
      	</div>

      	<div class="productimg">
      		<a target="_blank" href="detailpage.php">
      		<img src="Image/shoes1.png" alt="Shoe">
      		</a>
      	<div class="prices">400$</div>
      	<div class="prices">Nike Jordan</div>
      	</div>

      	<div class="productimg">
      		<a target="_blank" href="detailpage.php">
      		<img src="Image/shoes3.png" alt="Shoe">
      		</a>
      	<div class="prices">400$</div>
      	<div class="prices">Nike HD Grade Edition</div>
      	</div>


    </main>

    <aside id="right">
        <h1 id = "4" class = "product-name"> Phantom GT</h1>
        <h1 id = "5" class = "product-price"> $300 </h1>
        <img src="Image/footballshoes2.png" alt="Diorshoe" style=" display: none; width:30%" class="product-img">
        <p><strong>SELECT YOUR SIZE</strong></p>

        <table style="width:50%":>
        <tr>
          <th><button class="button button1"><b>3.5</b> </button></th>
          <th><button class="button button1"><b>4.0</b> </button></th>
          <th><button class="button button1"><b>4.5</b> </button></th>
          <th><button class="button button1"><b>5.5</b> </button></th>

        </tr>
        <tr>
          <th><button class="button button1"><b>5.5</b> </button></th>
          <th><button class="button button1"><b>6.0</b> </button></th>
          <th><button class="button button1"><b>6.5</b> </button></th>
          <th><button class="button button1"><b>7.0</b> </button></th>
        </tr>
        <tr>
          <th><button class="button button1 "><b>7.5</b> </button></th>
          <th><button class="button button1"><b>8.0</b> </button></th>
          <th><button class="button button1"><b>8.5</b> </button></th>
          <th><button class="button button1"><b>9.5</b> </button></th>
        </tr>
      </table>
      <br>


      <button class="button2" onclick="addItemtoCart(title,price,imageSrc)">ADD TO CART</button>
      <button class="button2"><a href="Order placement.php" target="_blank" onclick="addItemtoCart(title,price,imageSrc)">BUY NOW</a></button>

      <div class="Description">
        <h1> Description</h1>
        <p>The B23 high-top Dior Oblique sneakers are a stylish interpretation of a classic sneaker shape. Crafted in iconic blue and red Dior Oblique canvas, the high-tops feature an innovative clear mesh casing which spotlights the printed interior. White laces coordinate with a white back loop, and white rubber sole featuring deconstructed and pieced details with a 'Dior' logo on the outer foot.
        </p>
        <ul>
          <li>Blue and red pixilated Dior Oblique printed canvas upper</li>
          <li>High-top silhouette</li>
          <li>Lace-up style</li>
          <li>Padded insole</li>
          <li>White rubber toe and sole</li>
          <li>Textured 'Dior' signature on the side</li>
          <li>Welded construction</li>
          <li>Made in Italy</li>
          <li>This model fits as expected: we recommend ordering your normal shoe size.</li>
        </ul>

      </div>

      <button class="button2 button3"><a href="Store home page.php" target="_blank">BACK TO HOMEPAGE</a></button>

      <div id="consent-popup" class="cookies">
        <H1>I uses Cookie</H1>
        <h3>My website uses cookies necessary for its basic functioning. By continuing browsing, you consent to my use of
          cookies and other technologies.</h3>
        <div class="interaction">
          <input type="button" value="I understand" class="popup" id="accept">
          <a href="private.php">Learn more</a>
        </div>
      </div>
    </aside>

    <footer>
      <div class="row">
  <div class="column">
    <h2>Products</h2>
    <ul class ="footerlist">
		<li><a href="Store home page.php">Shoe</a></li>
		<li><a href="Store home page.php">Shirt</a></li>
		<li><a href="Store home page.php">Short</a></li>
		<li><a href="Store home page.php">Cap</a></li>
		<li><a href="Store home page.php">Football Shoe</a></li>
	</ul>
  </div>
  <div class="column" >
    <h2>About Us</h2>
    <ul class ="footerlist">
		<li><a href="Contact.php">Contact</a></li>
		<li><a href="About-us.php">Careers</a></li>
	</ul>
  </div>
  <div class="column" >
    <h2>Support</h2>
    <ul class ="footerlist">
		<li><a href="FAQs.php">FAQs</a></li>
		<li><a href="#">Delivery</a></li>
		<li><a href="ToS.php">ToS</a></li>
		<li><a href="Fees.php">Payment</a></li>
	</ul>
  </div>
</div>
<script type="text/javascript" src="js/cookie.js"></script>
<script src = "js/Order placement.js"></script>
    </footer>
  </body>
</html>
