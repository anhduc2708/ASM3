<?php
  $filename = 'install.php';
  if (file_exists($filename)) {
      echo "<h1> 404 Error Connection </h1>";
      exit();
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sport Advance</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
<link rel="icon" href="Image/download.png" type = "image/x-icon">
    <style>

      * {
        margin: 0;
      }
      header {
        background-color: white;
        height: 75px;
        position: sticky;
        top: 0;
		margin-bottom:10px;
    text-align: center;



      }
      footer {
        background-color: black;
        height: 100%;
        clear: both;


      }
      #left {

        width: 20%;
        min-width: 200px;
        float: left;
		margin-bottom:10px;
		text-align:left;
		height: 100%;
		margin-top:10px;

      }
      #right {

		margin-top:10px;
        width: 20%;
        float: left;
		margin-bottom:10px;
		height:100%;
		text-align:center;
      }

      main {
        background-color: white;
        width: calc(100% - 20% - max(20%, 200px));
        float: left;
		margin-bottom:10px;
		margin-top:10px;
      }

	  nav a{
    color: black;
    text-decoration: none;
	font-family: Dela Gothic One;
    font-size: 20px;
    padding: 7px 25px;
    display: inline-block;


  }
  footer h2{

    color: white;
    text-align: center;
    padding-left: 40px;


  }

  header img{

    float: left;
	position: sticky;
	top: 0;

  }
  * {
  box-sizing: border-box;
}
header div{
  text-align: right;
  font-size: 20px;
}


.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 100%;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
li {
	list-style-type: none;
	text-align: center;



}
li a{
text-decoration: none;
color: white;

}
div.productimg {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 215px;

}

div.productimg:hover {
  border: 1px solid #777;
}

div.productimg img {
  width: 100%;
  height: 300px;
  object-fit: cover;
}

div.prices{
  padding: 15px;
  text-align: center;
  font-weight: bold;
}
main h2{
  clear: both;

}

/* Cookie */
#consent-popup{
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 2rem;
  background: radial-gradient(#fff, #ffd6d6) ;
  opacity: 1;
  transition: opacity .8s ease;
  max-height: 200px;
}

      #accept{
      color: black;
      padding: 8px 30px;
      margin: 30px 0;
      border-radius: 15px;
      text-decoration: none;
      background-color: yellow;
      }

      .interaction{
        display: inline-flex;
        align-items: center;
        max-height: fit-content;

      }

      .interaction a{
        color: black;
        padding-left: 50px;
      }
    </style>
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
    <aside id="left">

	 <img src="Image/saleoffpic.png" height="100%" width="100%" float="left"></img>


    </aside>
    <main>
      <h2>Newest Products:</h2><br>

	<h2>Shirt</h2>
	 <div class="productimg">
		<a target="_blank" href="detailpage.php">
		<img src="Image/shirts1.png" alt="Shirt" width="500" height="400">
		</a>
	<div class="prices">100$</div>
	<div class="prices">Bangkok Shirt</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="Detailpage2.php">
		<img src="Image/shirts2.png" alt="Shirt" width="600" height="400">
		</a>
	<div class="prices">50$</div>
	<div class="prices">Nike Baseketball Shirt</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="detailpage.php">
		<img src="Image/shirts3.png" alt="Shirt" width="600" height="400">
		</a>
	<div class="prices">200$</div>
	<div class="prices">Yellow Nike Shirt</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="Detailpage2.php">
		<img src="Image/shirts4.png" alt="Shirt" width="600" height="400">
		</a>
	<div class="prices">400$</div>
	<div class="prices">Nike logo black edition</div>
</div><br>

    </main>


    <aside id="right">

	  <img src="Image/spotify-premium.jpg" height="500px" width="100%"></img>
	  <p>Advs.</p>
    </aside>
    <footer>
      <div class="row">
  <div class="column">
    <h2>Products</h2>
    <ul>
		<li><a href="Store home page.php">Shoe</a></li>
		<li><a href="Store home page.php">Shirt</a></li>
		<li><a href="Store home page.php">Short</a></li>
		<li><a href="Store home page.php">Cap</a></li>
		<li><a href="Store home page.php">Football Shoe</a></li>
	</ul>
  </div>
  <div class="column" >
    <h2>About Us</h2>
    <ul>
		<li><a href="About-us.php">Contact</a></li>
		<li><a href="About-us.php">Careers</a></li>
	</ul>
  </div>
  <div class="column" >
    <h2>Support</h2>
    <ul>
		<li><a href="FAQs.php">FAQs</a></li>
		<li><a href="#">Delivery</a></li>
		<li><a href="ToS.php">ToS</a></li>
		<li><a href="Fees.php">Payment</a></li>
	</ul>
  </div>
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
  <script type="text/javascript" src="js/cookie.js"></script>

    </footer>
  </body>
</html>
