<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log In</title>
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
}

body {font-family: Arial, Helvetica, sans-serif;}

form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: lightblue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

#pswinput{

    background-color: lightblue;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;

}

.registerbutton{
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.malllogo {
  width: 30%;
  border-radius: 20%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .registerbutton {
     width: 100%;
  }
}
a{
  text-decoration: none;
  color: black;
}



footer{
  background-color: black;
  height: 100px;
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
      <ul class="logo"><a href="Login.php"><img src="Image/Malllogo.png" width="200px" ></a></ul>

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

<h2>Login</h2>

<form action="index.php" method="post">


  <div class="imgcontainer">
    <img src="Image/favicon.png" alt="Malllogo" class="malllogo">
  </div>

  <div class="container">
    <span class="details">Username</span>
    <input type="text" id = "username" placeholder="Enter your username" name="username" >

    <span class="details">Password</span>
    <input type="password" id = "pw" placeholder="Enter your password" name="password_member">
    <input id="pswinput" type="submit" value="login" onclick="password()" name="pass"></input>
</form>


    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>


  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="registerbutton"><a href="Registration form.php">Register</a></button>
    <span class="psw"><a href="Forgotpsw.php">Forgot password?</a></span>
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
<script src=Js/Login.js></script>
<script type="text/javascript" src="js/cookie.js"></script>

</html>