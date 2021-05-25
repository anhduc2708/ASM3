<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Order Placement </title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel = "stylesheet" href="css/Order placement.css">
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
<link rel="icon" href="Image/download.png" type = "image/x-icon">

  </head>
  <body>
    <header>
      <header>
        <img src="Image/Store logo.png" height="100%" width="150px"></img>
        <nav>
            <a href="index.html">Home</a>
            <a href="Store home page.html">Products</a>
            <a href="About-us.html">Contact Us</a>
          </nav>
    </header>
    <main>
      <!--Shopping cart item details (Order placement)-->
      <div class="cart-container">
        <h1>Order Payment</h1>
        <div class="shopping-cart">

          <div class="products">

            <div class="product">
              <img src="Image/dior1.png" alt="Sneakers">
              <div class="product-info">
                <h2 id = "4" class="pro-name"> Jordan x Dior </h2>
                <h2 id = "5" class="pro-price"> $13425 </h2>
                <p class="product-quantity">Quantity <input class = "quantity-input" type="number" value="1">
                <p class="product-remove">
                <button class="remove-button"> Remove</button>
                </p>
              </div>
            </div>

              <div class="product">
                <img src="Image/footballshoes2.png" alt="Sneakers">
                <div class="product-info">
                  <h2 class="pro-name"> Phantom GT Academy FG </h2>
                  <h2 class="pro-price"> $3200 </h2>
                  <p class="product-quantity">Quantity <input class = "quantity-input" type="number" value="2">
                  <p class="product-remove">
                    <button class="remove-button"> Remove</button>
                  </p>
                </div>
              </div>

          </div>
          <div class="cart-total">
            <p>
              <span> SubTotal </span>
              <span id = "subprice" class = "sub-total"> $0 </span>
            </p>
            <p>
              <span> Coupon </span>
              <span><input type = "text" id="DiscountCoupon"  placeholder= "Add coupon code"> </span>
              <button class = "coupon-button" onclick="addCoupon()"> Check </button>
            </p>
            <p>
              <span>Total Price</span>
              <span  id = "total" class = "total-price"> $0 </span>
            </p>
            <br>
            <button class="buy-button"><a href="Store home page.html" target="_blank">CONTINUE SHOPPING</a></button>
            <button id = "order-button" class="buy-button"><a href="Thank You.html" target="_blank">ORDER NOW</a></button>
          </div>
      </div>
      <div id="consent-popup" class="cookies">
        <H1>I uses Cookie</H1>
        <h3>My website uses cookies necessary for its basic functioning. By continuing browsing, you consent to my use of
          cookies and other technologies.</h3>
        <div class="interaction">
          <input type="button" value="I understand" class="popup" id="accept">
          <a href="private.html">Learn more</a>
        </div>
      </div>
      </body>
      </html>
    </main>

    <footer>
      <div class="row">
  <div class="column">
    <h2>Products</h2>
    <ul>
		<li><a href="Store home page.html">Shoe</a></li>
		<li><a href="Store home page.html">Shirt</a></li>
		<li><a href="Store home page.html">Short</a></li>
		<li><a href="Store home page.html">Cap</a></li>
		<li><a href="Store home page.html">Football Shoe</a></li>
	</ul>
  </div>
  <div class="column" >
    <h2>About Us</h2>
    <ul>
		<li><a href="About-us.html">Contact</a></li>
		<li><a href="About-us.html">Careers</a></li>
	</ul>
  </div>
  <div class="column" >
    <h2>Support</h2>
    <ul>
		<li><a href="FAQs.html">FAQs</a></li>
		<li><a href="#">Delivery</a></li>
		<li><a href="ToS.html">ToS</a></li>
		<li><a href="Fees.html">Payment</a></li>
	</ul>
  </div>
</div>
<script type="text/javascript" src="js/cookie.js"></script>
<script src = "Js/Order placement.js"></script>
    </footer>
  </body>
</html>
