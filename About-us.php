<!DOCTYPE html>
<html>

<head>
  <title> About Us</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/About-us.css">
  <meta name="viewport" content="width = device-width, initial-scale = 1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">

</head>

<header>
  <!-- Logo and navbar -->
  <div class="nav">
    <ul class="logo"><a href="index.php"><img src="Image/Malllogo.png" width="200px"></a></ul>

    <ul class="Searchbar">
      <input type="search" id="search" placeholder="Search..." />
    </ul>

    <ul class="Nav-list">
      <li class="Nav-item">
        <a href='About-us.php' title="About us"> About us</a>
      </li>
      <li class="Nav-item">
        <a href="Fees.php" title="Fees ">Fees</a>
      </li>
      <li class="Nav-item">
        <a href="Contact.php" title="Contact"> Contact</a>
      </li>
      <li class="Nav-item">
        <a href="FAQs.php" title="FAQs"> FAQs</a>
      </li>
      <li class="Nav-item">
        <a href="Login.php" title="Sign in"> Sign in</a>
      </li>
      <li class="Nav-item">
        <a href="Registration form.php" title="Sign up"> Sign up</a>
      </li>
    </ul>
  </div>
</header>

<body>

  <div class="grid-container">
    <img id = "myBtn" class="Mem-img" src="Image/ducprofile.jpg">
    <div class="mem-info">
      <h2>Hoang Ngoc Anh Duc</h2>
      <br>
      <p><strong>ID: </strong>s3818988</p>
      <br>
      <p>I've learned a huge amount of knowledge of css and html during this project. I've take response for the
        homepage of the Mall, the About-us page, FAQs, Term of Service, Privacy Policy then debug and link those html
        websites into the header and footer as well as design the layout for them.</p>

    </div>
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Duc's Hobby is doing gym and playing badminton. </p>
  </div>
  </div>

    <img id = "myBtn1" class="Mem-img" src="Image/nickprofile.jpg">
    <div class="mem-info">
      <h2>Tran Chan Nam</h2>
      <br>
      <p><strong>ID:</strong>s3804825</p>
      <br>
      <p>In this project, I had learned and advanced how to use html and css. I take the reponse for Store homepage,
        Myaccount, and Forgot password website. Through this project, I can know that there are many difficuites during
        making websites. For example, thinking about different design for different websites is one of the difficuites.
        In addition, It is easy to get conflict if teammate don't communicate with each other. </p>
    </div>

    <div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="close1">&times;</span>
    <p>He was born to play football. He also love to sing but his voice was bad.</p>
  </div>
  </div>

    <img id = "myBtn2" class="Mem-img" src="Image/Duanprofile.jpg">
    <div class="mem-info">
      <h2>Hoang Ngoc Duan</h2>
      <br>
      <p><strong>ID: </strong>s3817747</p>
      <br>
      <p> This is definitely a long, hard assginment, but I enjoy it so much because it contains a huge amount of
        knowledge for how to build a complete website in front-end ways. My responsibility is taking care of the Order
        Placement, Thank You pages and its functions, also the Register ones. Although I and my teammates had many
        arguments because of different ideas and concepts, at last, together we have tried to build, develop and improve
        the website to become a glorious masterpiece. </p>
    </div>
    <div id="myModal2" class="modal2">

    <!-- Modal content -->
    <div class="modal-content2">
    <span class="close2">&times;</span>
    <p> Duan loves to read about coding. He also loves to help the others if the problem is in his ability.</p>
    </div>
    </div>

    <img id = "myBtn3" class="Mem-img" src="Image/andyprofile.jpg">
    <div class="mem-info">
      <h2>Le Anh Tuan</h2>
      <br>
      <p><strong>ID: </strong>s3836290</p>
      <br>
      <p>Throughout this project, I had learnd how to code the website and acknowledege what are the required element to
        complete the Shopping website . In this project, I took the response in Thank you, Fees, Contact and Detail
        Product websites. It is difficult to scale the image to fit with layout and position those image. I had advanced
        how to do internal css and external css. </p>
    </div>
    <div id="myModal3" class="modal2">

    <!-- Modal content -->
    <div class="modal-content3">
    <span class="close3">&times;</span>
    <p>He always try his best in working as a group. He is a hard working person. He always covers his teammates.</p>
    </div>
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

</body>

<footer>

  <!-- Bottom nav menu -->
  <div class="Bottom-nav">
    <div class="footer-content">
      <ul>
        <li class="footer-item">
          <a href="index.php" title="Home"> Home</a>
        </li class="footer-item">
        <li class="footer-item">
          <a href="FAQs.php" title="FAQs"> FAQs</a>
        </li class="footer-item">
        <li class="footer-item">
          <a href="About-us.php" title="About"> About</a>
        </li class="footer-item">
        <li class="footer-item">
          <a href="copyright.php" title="Copyright"> Copyright</a>
        </li class="footer-item">
        <li class="footer-item">
          <a href="ToS.php" title="Term"> Term of Service </a>
        </li>
        <li class="footer-item">
          <a href="private.php" title="Privacy Policy"> Privacy Policy</a>
        </li>
      </ul>
    </div>

    <div class="footer-descript">
      RMIT University, April 8th 2019
    </div>
  </div>
  <script type="text/javascript" src="js/cookie.js"></script>
  <script type="text/javascript" src = "js/About-us.js">

  </script>
</footer>

</html>
