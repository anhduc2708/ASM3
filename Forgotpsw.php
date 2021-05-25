<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="css/https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="Image/favicon.png">
<style>
 * {
    margin: 0;
  }
header{
  top: 0;
  position: sticky;
  clear: both;
  background-color: whitesmoke ;
  height:75px;
}

footer{
  background-color: black;
  clear:both;
  height:100%;
}

  .bottom-nav {
    max-width: 1600px;
    padding-left: 25px;
    padding-right: 25px;
  }

  .footer-content{
    display: flex ;
    justify-content: center;

  }

  .footer-item{
    font-size: 20px;
   list-style: none;
   margin: 0 8px;
   display: inline-block;
   transition: transform 0.5s;
   padding-top: 40px;

  }

  .footer-item a{
    text-decoration: none;
    color:white;
    }
  .footer-item:hover{
    transform: translateY(-5px);
  }
  .footer-descript{
    color: white;
   }

/* Navbar css */
 .nav{
   max-width: 1600px;
   display: flex;
   align-items: center;
   padding-left: 25px;
   padding-right: 25px;
 }

 .logo{
   padding-left: 0;
   margin: auto 16px;
 }

 .Nav-item{
   font-size: 20px;
   list-style: none;
   margin: 0 8px;
   display: inline-block;
   transition: transform 0.5s;
 }
 .Nav-item:hover{
  transform: translateY(-5px);
 }
 .Nav-item a{
  text-decoration: none;
  color:#555;
 }

 .Searchbar{
   flex: 1;
 }


 .container {
 	max-width: 250px;
 	margin: 0 auto;
 	padding: 0 10px;
  background: radial-gradient(#fff, #ffd6d6) ;
  height: 20  0px;
  border-radius: 25%;


 }
 body {
 	font: 400 14px/1.6 'Raleway', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
 	color: #4f4f5b;
 	background-color: #f7f7f7;
 	overflow-x: hidden;
	height:100px;

 }
  main {
 	padding: 250px 0;


 }

 .Forgot {
 		margin-bottom: 35px;
 		text-align: center;
 	}

 .Forgot h1 {
 font-family:'Merriweather', serif;
 			font: 700 40px;
 			margin-bottom: 20px;
 		}

 .Forgot p {
 			font-size: 15px;
 		}
	.bt{
		margin-top: 10px;
	}
	.fpswbutton{
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	background-color: lightblue;
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
    <!-- Logo and navbar -->
    <div class="nav">
      <ul class="logo"><a href="index.html"><img src="Image/Malllogo.png" width="200px" ></a></ul>

      <ul class="Searchbar">
          <input type="search" id="search" placeholder="Search..." />
      </ul>

      <ul class="Nav-list">
          <li class="Nav-item">
            <a href = 'About-us.html' title = "About us"> About us</a>
          </li>
          <li class="Nav-item">
            <a href = "Fees.html" title = "Fees ">Fees</a>
          </li>
          <li class="Nav-item">
            <a href = "Contact.html" title = "Contact"> Contact</a>
          </li>
          <li class="Nav-item">
            <a href = "FAQs.html" title = "FAQs"> FAQs</a>
          </li>
          <li class="Nav-item">
            <a href = "Login.html" title = "Sign in"> Sign in</a>
          </li>
          <li class="Nav-item">
          <a href = "Registration form.html" title = "Sign up"> Sign up</a>
          </li>
      </ul>
    </div>
  </header>
        </ul>
      </div>
    </header>
	<main>
<form method="get" action="index.html">
	<div class="container">
	  <section class="Forgot">

    <p><strong>Forgot Password</strong></p>

    <p>Email:</p>
    <input type="email" name="Email" value="" placeholder="Your Email" required>

    <p>Phone Number</p>
    <input type="text" name="Phone Number" value="" placeholder="Your Phone Number" required>
	<div class="bt">
	<button class="fpswbutton" onclick="alert('Your Password had been reset')">Reset Password</button>

	</div>
	</section>

</div>
</main>
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
<footer>

  <!-- Bottom nav menu -->
  <div class="Bottom-nav">
    <div class = "footer-content">
      <ul>
        <li class="footer-item">
          <a href = "index.html" title = "Home"> Home</a>
        </li class="footer-item">
        <li class="footer-item">
          <a href = "FAQs.html" title = "FAQs"> FAQs</a>
        </li class="footer-item">
        <li class="footer-item">
          <a href = "About-us.html" title = "About"> About</a>
        </li class="footer-item">
        <li class="footer-item">
          <a href = "copyright.html" title = "Copyright"> Copyright</a>
        </li class="footer-item">
        <li class="footer-item">
          <a href = "ToS.html" title = "Term"> Term of Service </a>
        </li>
        <li class="footer-item">
          <a href = "private.html" title = "Privacy Policy"> Privacy Policy</a>
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
