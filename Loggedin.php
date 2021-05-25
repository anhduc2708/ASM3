<!DOCTYPE html>
<html>
<head>
<title>Logged In</title>
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
  margin-bottom:20px;
}

footer{
  background-color: black;
  height: 100px;
  clear:both;
  margin-top:20px;
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

  main{
    margin-top:10px;
    background-color: white ;
    float:left;
    width: calc(100% - 40%);
    margin-bottom:10px;
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

 #left{
 float:left;

 width: 30%;

 }

 #left img {
	height: 250px;
	width:250px;
	border-radius: 50%;
	float:left;
	margin-left:50px;



 }
 #right{
 	margin-top:10px;
        width: 20%;
        float: right;
		margin-bottom:10px;
		height:100%;
		text-align:center;
 }
 main {
        background-color: white;
        width: calc(100% - 20% - 30%);
        float: left;
		margin-bottom:10px;
		margin-top:10px;
		}

 .information{

 padding-top:10px;
 float:left;
 margin-left:50px;
 padding-bottom:175px;

 }
 .nameid{

 padding-top:20px;
 }
 .mainarea{


 padding-bottom:100px;

 }
 .button2{
  background-color: black;
  color: white
}


.button2 {
  display: inline-block;
  padding: 20px 40px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: black;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin-bottom:75px;

}
.button2:hover {background-color:gray;}

.button2:active {
  background-color: gray;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.borderfooter{
border-style: solid;
border-color: black;
border-width: 10px 10px;
background-color:white;
color:black;
padding-right:30px;


}
a{
text-decoration: none;
color:white;

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
<body>
<aside id= "left">
<img src="Image/Nickprofile.jpg"></img>


</aside>
<main>
<div class="mainarea">
<h2>Personal Information</h2>
<div class="information">
<div class="nameid">
<p><strong>First Name:</strong> Nam</p>
<br>
<p><strong>Last Name:</strong> Tran</p>
<br>
<p><strong>Full Name:</strong> Tran Chan Nam</p>
<br>
</div>
<p><strong>Nick name:</strong> Nick Tran</p>
<br>
<p><strong>Role:</strong> User</p>
<br>
<p><strong>Email:</strong> channam1501@gmail.com</p>
<br>
<p><strong>Phone Number:</strong> 0326464392</p>
<br>
<p><strong>Address:</strong> 703 Nguyen Van Linh HCM city</p>
<br>
<p><strong>Website:</strong> personal.com</p>

</div>
</div>
</main>

<aside id="right">
<button class="button2"><a href="Forgotpsw.html">Change My Password</a></button>
<div class="borderfooter">
<h2>Checkout Defaut</h2>
<br>
<p>Shipping medthod: Flycam</p>
<br>
<p>Shipping address: 703 Nguyen Van Linh</p>
<br>
<p>Creadit card: 123456 - ATM banking</p>
<br>
<button class="button2">Edit</button>


</div>
</aside>
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
            <a href = "Homepage.html" title = "Home"> Home</a>
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