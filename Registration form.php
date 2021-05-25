<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
        <meta charset = "utf-8">
        <title> Sign Up </title>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        <link rel = "stylesheet" href = "css/Register form.css">
        <script src = "Js/Register.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="Image/favicon.png">

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
  <div class="container">
    <section class="Registration">
      <div class="register-container">

        <div class="title"> Sign Up Form</div>

        <div class="content">
          <form>

            <div class="user-details">
              <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" id = "name" placeholder="Enter your name">
              </div>
              <div class="input-box">
                <span class="details">Username</span>
                <input type="text" id = "username" placeholder="Enter your username">
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="text" id = "email" placeholder="Enter your email">
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" id = "phone" placeholder="Enter your number">
              </div>
              <div class="input-box">
                <span class="details">Password</span>
                <input type="password" id = "pw" placeholder="Enter your password">
              </div>
              <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="password" id = "check_pw" placeholder="Confirm your password">
              </div>
              <div class = "input-box">
                <span class = "details"> Address </span>
                <input type = "text" id = "address" placeholder="Enter your address">
              </div>
              <div class = "input-box">
                <span class = "details"> City </span>
                <input type = "text" id = "city" placeholder="Enter your city name">
              </div>
              <div class = "input-box">
                <span class = "details"> Zipcode </span>
                <input type = "text" id = "zipcode" placeholder="Enter your zipcode (number)">
              </div>
              <div class = "input-box">
                <span class = "details"> Country Code </span>
                <input type = "text" id = "code" placeholder="Enter your country code (only 2 number)">
              </div>

            <!-- STORE OWNER INPUT  -->

                <div id= "opt" class = "input-box">
                  <span class = "details"> Bussiness Name (Store Owner Only) </span>
                  <input type = "text" id = "Owner_Input" placeholder="Enter your Bussiness name">
                </div>

                <div id= "opt" class = "input-box">
                  <span class = "details"> Store Name (Store Owner Only) </span>
                  <input type = "text" id = "Owner_Input" placeholder="Enter your store name">
                </div>

                <div id= "opt" class = "input-box">
                  <span class = "details"> Store Type (Store Owner Only) </span>
                  <select name = "store-list">
                    <option value = '' selected > Please select store </option>
                    <option value = '1' selected > Department Store </option>
                    <option value = '2' selected > Restaurant </option>
                    <option value = '3' selected > Grocery Store </option>
                    <option value = '4' selected > Clothing Store </option>
                    <option value = '5' selected > Accessory Store </option>
                    <option value = '6' selected > Pharmacy </option>
                    <option value = '7' selected > Technology Store </option>
                    <option value = '8' selected > Pet Store </option>
                    <option value = '9' selected > Toy Store </option>
                    <option value = '10' selected > Specialty Store </option>
                    <option value = '11' selected > Thrift Store </option>
                    <option value = '12' selected > Services </option>
                    <option value = '13' selected > Kiosks </option>
                  </select>
             </div>


            <div class="account-details">
              <input type="radio" name="account" id="dot-1" >
              <input type="radio" name="account" id="dot-2" >
              <span class="account-title">Account Type </span>

              <div class="category">

              <label for="dot-1">
                <span class="dot owner"></span>
                <span class="account" >Store Owner</span>
              </label>

              <label for="dot-2">
                <span class="dot user"></span>
                <span class="account"> User </span>
              </label>

              </div>
            </div>

            <div class="button">
              <input type="submit" value="Register" onclick="registerFunctionals()">
            </div>
          </form>
        </div>
      </div>
    </section>
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
</body>
</html>