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
        <div>

	<!-- PHP BROWSE -->
	<label for="ProductBrowse">Browse Product:</label>
 	<select id="products" onchange="Browse_Products(this)">
	<option value=""> -- Select -- </option>
   	<option value="br_category">Browse Products by Category</option>
   	<option value="br_time">Browse Products by Created Time</option>
 	</select>
	<p style="color: red" id="show_message"></p>
	</div>
    </header>



    <aside id="left">

	 <img src="Image/saleoffpic.png" height="100%" width="100%" float="left"></img>


    </aside>

	<?php 
// PRODUCTS FUNCTION (IN STORES)
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
  
  
  // get products from file
  function get_product($product_id) {
	$products = read_all_products();
	foreach ($products as $p) {
	  if ($p['id'] == $product_id) {
		return $p;
	  }
	}
	return false;
  };
  
  
  // add featured products Array (stores)
  function featured_products_arr(){
	$all_products_length = count(read_all_products());
	$featured_products_arr = read_all_products();
	for ($i=0; $i < $all_products_length ; $i++) {
	  if ($featured_products_arr[$i]['featured_in_store'] == 'FALSE') {
		  unset($featured_products_arr[$i]);
	  }
	};
  
	$all_products_infor = array_values($featured_products_arr);
  
	$result = [];
	for ($i=0; $i < 10; $i++) {
		$result[$i] = [$all_products_infor[$i]['name'],$all_products_infor[$i]['price']];
	}
	return $result;
  
  };
  
//   echo '<pre> ';
//   var_dump(featured_products_arr())."<br>";
//   echo '</pre> ';

//  function for new products
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
  
  // create a result arr wth all new products informations
  function new_product_arr(){
	$time_arr = time_products_arr();
	$id_all_products = array_keys($time_arr);
	$all_products_arr = read_all_products();
	$result = [];
	for ($i=0; $i <5; $i++) {
	  $result[$i] = [$all_products_arr[$id_all_products[$i] - 1]['name'], $all_products_arr[$id_all_products[$i] - 1]['price']];
	}
	return $result;
  };
  	// echo '<pre>';
	// var_dump(new_product_arr());
	// echo '</pre>';

	// display product function
	function display_product($array){
		$product_img = ['Image/cap1.png', 'Image/cap2.png', 'Image/cap3.png', 'Image/cap4.png', 'Image/footballshoes1.png', 'Image/footballshoes2.png', 'Image/footballshoes3.png', 'Image/footballshoes4.png', 'Image/shirts1.png', 'Image/shirts2.png'];
		for ($i=0; $i <count($array); $i++) {
		  $display_name = $array[$i][0];
		  $display_price = $array[$i][1];
			echo "<div class='productimg'>
					<a target='_blank' href='detailpage.php'>
					<img src='$product_img[$i]' alt='Shoe' height='100'>
					</a>
					<div class='prices'>$display_price$</div>
					<div class='prices'>$display_name</div>
					</div>"	;	 
		}
	  };
	  


  
	?>

    <main>
	<!-- DISPLAY PHP PART -->
	<h2>New Products</h2>
	<?php display_product(new_product_arr())?>


	<!--FEATURED PRODUCTS  -->

	<h2>Featured Products</h2>
	<?php display_product(featured_products_arr())?>


	<h2>Shoes</h2>
    <div class="productimg">
		<a target="_blank" href="detailpage.php">
		<img src="Image/shoes4.png" alt="Shoe" height="100">
		</a>
	<div class="prices">250$</div>
	<div class="prices">Nike Boost</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="Detailpage2.php">
		<img src="Image/shoes2.png" alt="Shoe" height="400">
		</a>
	<div class="prices">300$</div>
	<div class="prices">Nike Force</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="detailpage.php">
		<img src="Image/shoes1.png" alt="Shoe" height="400">
		</a>
	<div class="prices">400$</div>
	<div class="prices">Nike Jordan</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="Detailpage2.php">
		<img src="Image/shoes3.png" alt="Shoe" height="400">
		</a>
	<div class="prices">400$</div>
	<div class="prices">Nike HD Grade Edition</div>
	</div>

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
	</div>

	<h2>Short</h2>
	 <div class="productimg">
		<a target="_blank" href="detailpage.php">
		<img src="Image/Short1.jpg" alt="Short" width="600" height="300px">
		</a>
	<div class="prices">50$</div>
	<div class="prices">Adidas Original Style</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="Detailpage2.php">
		<img src="Image/Short2.jpg" alt="Short" width="600" height="400">
		</a>
	<div class="prices">39$</div>
	<div class="prices">Underarmor Short</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="detailpage.php">
		<img src="Image/Short3.jpg" alt="Short" width="600" height="400">
		</a>
	<div class="prices">49$</div>
	<div class="prices">Grey Edition Adias</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="Detailpage2.php">
		<img src="Image/Short3.png" alt="Short" width="600" height="400">
		</a>
	<div class="prices">60$</div>
	<div class="prices">Nike Full Black Edition</div>
	</div>


	<h2>Hat</h2>
	 <div class="productimg">
		<a target="_blank" href="detailpage.php">
		<img src="Image/cap1.png" alt="Hat" width="600" height="400">
		</a>
	<div class="prices">500$</div>
	<div class="prices">Nike Fashion Hat</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="Detailpage2.php">
		<img src="Image/cap2.png" alt="Hat" width="600" height="400">
		</a>
	<div class="prices">100$</div>
	<div class="prices">Just Do It Hat</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="detailpage.php">
		<img src="Image/cap3.png" alt="Hat" width="600" height="400">
		</a>
	<div class="prices">2000$</div>
	<div class="prices">Fly to Paris Hat</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="Detailpage2.php">
		<img src="Image/cap4.png" alt="Hat" width="600" height="400">
		</a>
	<div class="prices">300$</div>
	<div class="prices">HD Hat</div>
	</div>

	<h2>Football Shoes</h2>
	 <div class="productimg">
		<a target="_blank" href="detailpage.php">
		<img src="Image/footballshoes1.png" alt="Football Shoes" width="600" height="400">
		</a>
	<div class="prices">400$</div>
	<div class="prices">Nike Mercurial Superfly 8 FG</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="Detailpage2.php">
		<img src="Image/footballshoes2.png" alt="Football Shoes" width="600" height="400">
		</a>
	<div class="prices">300$</div>
	<div class="prices">Nike Phantom GT Academy FG</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="detailpage.php">
		<img src="Image/footballshoes3.png" alt="Football Shoes" width="600" height="400">
		</a>
	<div class="prices">100$</div>
	<div class="prices">Nike Mercurial Superfly Academy 7</div>
	</div>

	<div class="productimg">
		<a target="_blank" href="Detailpage2.php">
		<img src="Image/footballshoes4.png" alt="Football Shoes" width="600" height="400">
		</a>
	<div class="prices">120$</div>
	<div class="prices">Nike Mercurial Vapor 14 Academy IC</div>
	</div>


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
