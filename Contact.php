<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/Contact_css.css">
    <link rel="icon" type="image/png" href="Image/favicon.png">
    <script src="Js/Contact.js"></script>
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

 <body onload="document.form1.text1.focus()">

<div class="container">
  <section class="contact">
    <div class="main_form">
      <h1>Support Service</h1>
      <p><strong>Do you have any problems? Fill in the forms below for we can help you.</strong></p>
      <br>

      <!-- <form action="Contact.html"> -->
        <form>
        <label for="Contact purpose">Contact Purpose</label>
        <select id="purpose" name="purpose" required>
          <option value=""> What is your problems ?</option>
          <option value="money">Payment Issues</option>
          <option value="acount">Account Problem</option>
          <option value="conflict">Can Not Connect To My Wallet</option>

        </select>

        <label for="fname">Your Name</label>
        <input type="text" id="fname" name="name" placeholder="Your name..">

        <label for="email">Enter your email:</label><br>
        <input type="text" id="email" name="email"  placeholder="Your email.."><br>

        <label for="phone">Enter your phone number:</label><br>
        <input type="text" id="phone" name="phone"  placeholder="Your phone number.."><br>

        <label for="contact">Preferred contact method</label><br>
        <select id="contact" name="contact" required>
          <option value=""> Please select your method !</option>
          <option value="phone">Phone</option>
          <option value="email">Email</option>
        </select><br>

        <label for="contact_day">Contact days</label><br>
        <input type="checkbox" id="monday" name="monday" value="Days">
        <label for="monday"> Monday</label>
        <input type="checkbox" id="tuesday" name="tuesday" value="Days">
        <label for="tuesday"> Tuesday</label>
        <input type="checkbox" id="wednesday" name="wednesday" value="Days">
        <label for="wednesday"> wednesday</label>
        <input type="checkbox" id="thursday" name="thursday" value="Days">
        <label for="thursday"> Thursday</label>
        <input type="checkbox" id="friday" name="friday" value="Days">
        <label for="friday"> Friday</label>
        <input type="checkbox" id="saturday" name="saturday" value="Days">
        <label for="saturday"> Saturday</label>
        <input type="checkbox" id="sunday" name="sunday" value="Days">
        <label for="sunday"> Sunday</label><br>


        <label for="message">Any thing else you want to say:</label><br>
        <textarea id="word" oninput="countWord()" rows="10" cols="113" placeholder="At least 50 words and Maximum 500 words" required></textarea>

        <p> Word Count: <span id="show">0</span></p>

        <input type="submit" value="Clear" onclick="Contact.html"><br>
        <p>or</p>
        <input type="submit" value="Send" onclick="everyFunction()"><br>
        </form>

      </div>

      </section>
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
          <a href = "copyright.html" title = "Copyright"> Copyright</a>
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
