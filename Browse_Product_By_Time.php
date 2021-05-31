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
		text-align:center;
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


#move{
  background-color: black;
  color: white;
  margin-top: 250px;
  height: 100px;
  display: block;
  width: 100%;
  font-size: 50px;
  border-radius: 40px;
}

#move:hover{
  background-color: #ddd;
  color: black;
}

aside a{
  text-decoration: none;
}
.options{
  font-size: 24px;
}
.options button{
  text-align: center;
  background-color: black;
  color: white;
  width:100px;
  height:50px;
  border-radius: 40px;
  margin-right: 10px;

}
.options button:hover{
  background-color: #ddd;
  color: black;
}
.options label{
  margin-right:10px;
  font-size: 26px;
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

  
	<!-- PHP BROWSE -->
  <div>
	  <label for="ProductBrowse">Browse Product:</label>
 	  <select id="products" onchange="Browse_Products(this)">
	    <option value=""> -- Select -- </option>
   	  <option value="br_category">Browse Products by Category</option>
   	  <option value="br_time">Browse Products by Created Time</option>
 	  </select>
	  <p style="color: red" id="show_message"></p>
	</div>


    </header>

  <?php

  // add all product file to arr
  function read_all_products() {
    $file_name = 'products.csv';
    $fp = fopen($file_name, 'r');
    $first = fgetcsv($fp);
    $products = [];
    while ($row = fgetcsv($fp)) {
      $i = 0;
      $product = [];
      foreach ($first as $col_name) {
        $product[$col_name] =  $row[$i];
        $i++;
      };
      $products[] = $product;
    };
    return $products;
  };


  // create function with real id and caculate time
  function time_products_arr(){
    $time_arr= [];
    for ($i=0; $i < count(read_all_products()); $i++) {
      $time_selected = read_all_products()[$i]["created_time"];
      $new_time_selected = str_replace("Z","",$time_selected);
      $time_product = time() - strtotime($new_time_selected);
      $time_arr[$i] = abs($time_product);
    }
    asort($time_arr);
    return $time_arr;
  };

  // echo '<pre>';
  // var_dump(time_products_arr());
  // echo '</pre>';  

  // create a result arr wth all new products informations
  function new_product_arr(){
    $time_arr = time_products_arr();
    $id_all_products = array_keys($time_arr);
    $all_products_arr = read_all_products();
    $result = [];
    for ($i=0; $i <10; $i++) {
      $id_products = $id_all_products[$i] - 1;
      $result[$i] = [ $all_products_arr[$id_products]['name'], $all_products_arr[$id_products]['price'], str_replace("Z","",$all_products_arr[$id_products]['created_time'])];
    }
    return $result;
  };

  // echo '<pre>';
  // echo "NEW ARRAY";
  // var_dump(new_product_arr());
  // echo '</pre>';

  // create function with real id and caculate time from high to low
  function old_time_products_arr(){
    $time_arr= [];
    for ($i=0; $i < count(read_all_products()); $i++) {
      $time_selected = read_all_products()[$i]["created_time"];
      $new_time_selected = str_replace("Z","",$time_selected);
      $time_product = time() - strtotime($new_time_selected);
      $time_arr[$i] = abs($time_product);
    }
    arsort($time_arr);
    return $time_arr;
  };


  // create a result arr wth all old products informations
  function old_product_arr(){
    $time_arr = old_time_products_arr();
    $id_all_products = array_keys($time_arr);
    $all_products_arr = read_all_products();
    $result = [];
    for ($i=0; $i <10; $i++) {
      $id_products = $id_all_products[$i] - 1;
      $result[$i] = [ $all_products_arr[$id_products]['name'], $all_products_arr[$id_products]['price'], str_replace("Z","",$all_products_arr[$id_products]['created_time'])];
    }
    return $result;
  };
  // echo '<pre>';
  // echo "OLD ARRAY";
  // var_dump(old_product_arr());
  // echo '</pre>';  

  // display products
  function display_product_arr($arr){
    // $arr = new_product_arr();
    $all_products_arr = read_all_products();
    $result = [$arr[0]];
    for ($i=0; $i < count($all_products_arr); $i++) {
      $split_z = str_replace("Z","",$all_products_arr[$i]['created_time']);
      if ($arr[0][2] == $split_z ) {
        $infor = [ $all_products_arr[$i]['name'], $all_products_arr[$i]['price'], str_replace("Z","",$all_products_arr[$i]['created_time'])];
        array_push($result,$infor );
      } 
    }
    return $result;
};

  $oldest_arr =  display_product_arr(old_product_arr());
  $newest_arr =  display_product_arr(new_product_arr());

  // echo "<pre>";
  // var_dump($oldest_arr);
  // echo "</pre>";

  // echo "<pre>";
  // var_dump($newest_arr);
  // echo "</pre>";
  

  // display function
  function display_product($array){
		$product_img = ['Image/cap1.png', 'Image/cap2.png', 'Image/cap3.png', 'Image/cap4.png', 'Image/footballshoes1.png', 'Image/footballshoes2.png', 'Image/footballshoes3.png', 'Image/footballshoes4.png', 'Image/shirts1.png', 'Image/shirts2.png'];
		for ($i=0; $i <count($array); $i++) {
		  $display_name = $array[$i][0];
		  $display_price = $array[$i][1];
      $display_date = $array[$i][2];
			echo "<div class='productimg'>
					<a target='_blank' href='detailpage.php'>
					<img src='$product_img[$i]' alt='Shoe' height='100'>
					</a>
					<div class='prices'>$display_price$</div>
					<div class='prices'>$display_name</div>
          <div class='prices'>$display_date</div>
					</div>"	;	 
		}
	  };



  ?>
    <aside id="left">
      <a href="Oldest.php" class="previous"> <button type="button" name="button" id="move" > &laquo; Previous</button></a>
    </aside>

  <main>
  
  <div class="options">
  <form method="post">
      <input type="submit" name="letter_A" value="Oldest Product" />
      <input type="submit" name="letter_B" value="Newest Product" />
  </form> 
  </div>
   

  

  <h2>Display Products:</h2><br> 
  
  
  <?php 
  if(array_key_exists('letter_A', $_POST)) {
    echo '<h3>The new products</h3>';
    display_product($oldest_arr);
  }
  else if(array_key_exists('letter_B', $_POST)) {
    echo '<h3>The old products</h3>';
    display_product($newest_arr);
  }
  
  ?>


    </main>


    <aside id="right">
	  <a href="Newest.php" class="next"><button type="button" name="button" id ="move">Next &raquo;</button></a>
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

<script type="text/javascript">
  function Browse_Products(obj)
{
    var message = document.getElementById('show_message');
    var value = obj.value;
    if (value === ''){
        message.innerHTML = "Select Again";
    }
    else if (value === 'br_time'){
        window.location.href = "Browse_Product_By_Time.php";
    }
    else if (value === 'br_category'){
        window.location.href = "Browse_Product_By_Category.php";
    }
}
</script>
</html>
