<?php
  $filename = 'install.php';
  if (file_exists($filename)) {
      echo "<h1> 404 Error Connection </h1>";
      exit();
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Browse by Name</title>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "css/Browse_Stores.css">
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

            <li class ="Nav-item">
              <label> Browse Stores </label>
              <select id="stores" onchange="Browse_Stores(this)">
                <option value=""> -- Select -- </option>
                <option value= "br_name">By Name</option>
                <option value= "br_category">By Category</option>
              </select>
              <p style="color: red" id="show_message"></p>
            </li>

        </ul>
      </div>
  </header>

  <body>

<?php
// add all product file to arr
    function read_all_stores() {
      $file_name = 'stores.csv';
      $fp = fopen($file_name, 'r');
      $first = fgetcsv($fp);
      $stores = [];
      while ($row = fgetcsv($fp)) {
        $i = 0;
        $store = [];
        foreach ($first as $col_name) {
          $store[$col_name] =  $row[$i];
          $i++;
        }
        $stores[] = $store;
      }
      return $stores;
    };

// sort stores by name
    function sort_name_arr(){
      $file_arr = read_all_stores();
      $name_arr = [];
      for ($i=0; $i < count($file_arr); $i++) {
        $name_arr[$i] = $file_arr[$i]['name'];
      }
      sort($name_arr);
      return $name_arr;
      // return $file_arr;
    };

// echo "<pre>";
// var_dump(sort_name_arr());
// echo "</pre>";




    //print the stores by name
  function search_name($letters){
    $name_arr = sort_name_arr();
    $result_arr = [];
    for ($i=0; $i < count($name_arr); $i++) {
      $first_char = $name_arr[$i][0];
      if ($first_char == $letters) {
        array_push($result_arr,$name_arr[$i]);
      }
    }
    return $result_arr;
  };

  // echo "<pre>";
  // var_dump(search_name('A'));
  // echo "</pre>";

  // display # stores char
  function not_letter_stores(){
    $numbers = range(0, 9);
    $name_arr = sort_name_arr();
    $result_arr = [];
    for ($i=0; $i < count($name_arr) ; $i++) {
        $first_char = $name_arr[$i][0];
        for ($x=0; $x <count($numbers) ; $x++) {
          if ($first_char == $numbers[$x]) {
            array_push($result_arr,$name_arr[$i]);
          }
        }
    }
    return $result_arr;
  };

// echo "<pre>";
// var_dump(not_letter_stores());
// echo "</pre>";

function display_stores($array){
  // $array = search_name('A');
  $stores_logo = ['Image/adidas.png','Image/ananas.png','Image/bitis.png','Image/chanel.png','Image/gucci.png','Image/LV.png','Image/nike.png','Image/adidas.png','Image/Store logo - Copy.png','Image/nike.png','Image/adidas.png','Image/ananas.png','Image/bitis.png','Image/chanel.png','Image/gucci.png','Image/LV.png','Image/nike.png','Image/adidas.png','Image/Store logo - Copy.png','Image/nike.png','Image/adidas.png','Image/Store logo - Copy.png','Image/nike.png', ];
  for ($i=0; $i <count($array); $i++) {
    $display = $array[$i];
    echo " <li>
            <a href='Store home page.php'> <img src='$stores_logo[$i]' alt='Shoe' width='150px' height='150px'> </a>
            <div class='infor'> $display </div>
           </li>";
  }
};

 ?>
<div class="browse_name">
  <p>Select the first letters to display the stores</p>
  <form method="post">
      <input type="submit" name="letter_A" value="A" />
      <input type="submit" name="letter_B" value="B" />
      <input type="submit" name="letter_C" value="C" />
      <input type="submit" name="letter_D" value="D" />
      <input type="submit" name="letter_E" value="E" />
      <input type="submit" name="letter_F" value="F" />
      <input type="submit" name="letter_G" value="G" />
      <input type="submit" name="letter_H" value="H" />
      <input type="submit" name="letter_I" value="I" />
      <input type="submit" name="letter_J" value="J" />
      <input type="submit" name="letter_K" value="K" />
      <input type="submit" name="letter_M" value="M" />
      <input type="submit" name="letter_N" value="N" />
      <input type="submit" name="letter_O" value="O" />
      <input type="submit" name="letter_P" value="P" />
      <input type="submit" name="letter_Q" value="Q" />
      <input type="submit" name="letter_R" value="R" />
      <input type="submit" name="letter_S" value="S" />
      <input type="submit" name="letter_T" value="T" />
      <input type="submit" name="letter_U" value="U" />
      <input type="submit" name="letter_V" value="V" />
      <input type="submit" name="letter_W" value="W" />
      <input type="submit" name="letter_X" value="X" />
      <input type="submit" name="letter_Y" value="Y" />
      <input type="submit" name="letter_Z" value="Z" />
      <input type="submit" name="Other" value="#" />
  </form>
</div>


<div class="divide_place">
<div class="small-container">
<ul>


<?php
if(array_key_exists('letter_A', $_POST)) {
    display_stores(search_name('A'));
}
else if(array_key_exists('letter_B', $_POST)) {
    display_stores(search_name('B'));
}
else if(array_key_exists('letter_C', $_POST)) {
    display_stores(search_name('C'));
}
else if(array_key_exists('letter_D', $_POST)) {
    display_stores(search_name('D'));
}
else if(array_key_exists('letter_E', $_POST)) {
    display_stores(search_name('E'));
}
else if(array_key_exists('letter_F', $_POST)) {
    display_stores(search_name('F'));
}
else if(array_key_exists('letter_G', $_POST)) {
    display_stores(search_name('G'));
}
else if(array_key_exists('letter_H', $_POST)) {
    display_stores(search_name('H'));
}
else if(array_key_exists('letter_I', $_POST)) {
    display_stores(search_name('I'));
}
else if(array_key_exists('letter_J', $_POST)) {
    display_stores(search_name('J'));
}
else if(array_key_exists('letter_K', $_POST)) {
    display_stores(search_name('K'));
}
else if(array_key_exists('letter_M', $_POST)) {
    display_stores(search_name('M'));
}
else if(array_key_exists('letter_N', $_POST)) {
    display_stores(search_name('N'));
}
else if(array_key_exists('letter_O', $_POST)) {
    display_stores(search_name('O'));
}
else if(array_key_exists('letter_P', $_POST)) {
    display_stores(search_name('P'));
}
else if(array_key_exists('letter_Q', $_POST)) {
    display_stores(search_name('Q'));
}
else if(array_key_exists('letter_R', $_POST)) {
    display_stores(search_name('R'));
}
else if(array_key_exists('letter_S', $_POST)) {
    display_stores(search_name('S'));
}
else if(array_key_exists('letter_T', $_POST)) {
    display_stores(search_name('T'));
}
else if(array_key_exists('letter_U', $_POST)) {
    display_stores(search_name('U'));
}
else if(array_key_exists('letter_V', $_POST)) {
    display_stores(search_name('V'));
}
else if(array_key_exists('letter_W', $_POST)) {
    display_stores(search_name('W'));
}
else if(array_key_exists('letter_X', $_POST)) {
    display_stores(search_name('X'));
}
else if(array_key_exists('letter_Y', $_POST)) {
    display_stores(search_name('Y'));
}
else if(array_key_exists('letter_Z', $_POST)) {
    display_stores(search_name('Z'));
}
else if(array_key_exists('Other', $_POST)) {
    display_stores(not_letter_stores());
}
?>


</ul>
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

<script type="text/javascript">

function Browse_Stores(obj)
{
    var message = document.getElementById('show_message');
    var value = obj.value;
    if (value === ''){
        message.innerHTML = "Select Again";
    }
    else if (value === 'br_name'){
        window.location.href = "Browse_Name.php";
    }
    else if (value === 'br_category'){
        window.location.href = "Browse_Category.php";
    }
}

</script>

</html>
