<?php
  $filename = 'instal1l.php';
  if (file_exists($filename)) {
      echo "<h1> 404 Error Connection </h1>";
      exit(test.php);
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <p>tuyet voi ong mat troi</p>

    <?php
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
        }
        $products[] = $product;
      }
      return $products;
    }

    // read_all_products();
    // print_r(read_all_products());


    function get_product($product_id) {
      $products = read_all_products();
      foreach ($products as $p) {
        if ($p['id'] == $product_id) {
          return $p;
        }
      }
      return false;
    }
    // print_r(get_product(1));

    // add all data to array
    $test_Array = [];
    for ($i=0; $i< count(read_all_products()) + 1; $i++) {
      $test_Array[] = get_product($i);
    }

    echo '<pre> ';
    var_dump($test_Array)."<br>";
    echo '</pre> ';

    // echo count($test_Array);

    $test_length = count($test_Array);


    // for ($i=0; $i <$test_length; $i++) {
    //     echo '<pre> ';
    //     var_dump($test_Array[$i]['created_time'])."<br>";
    //     echo '</pre> ';
    // }

    $valid_product_array = [];
    for ($i=0; $i <$test_length ; $i++) {
      if ($test_Array[$i]['featured_in_mall'] != 'FALSE' && $valid_product_array[$i] != $test_Array[$i] ) {
          $valid_product_array[] = $test_Array[$i];
      }
    };

    // echo count($valid_product_array);
    // for ($i=0; $i <count($valid_product_array); $i++) {
    //     echo '<pre> ';
    //     var_dump($valid_product_array[$i])."<br>";
    //     echo '</pre> ';
    // }



    // echo '<pre> ';
    // var_dump($valid_product_array)."<br>";
    // echo '</pre> ';


    ?>

  </body>
</html>
