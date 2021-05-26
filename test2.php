<?php
  // $filename = 'install.php';
  // if (file_exists($filename)) {
  //     echo "<h1> 404 Error Connection </h1>";
  //     exit(test.php);
  // }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

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
    $counts=0;
    $count_string;
    while(read_all_products()[$counts]["created_time"]){
      $time_selected = read_all_products()[$counts++]["created_time"];
      $new_time_selected = str_replace("Z","",$time_selected);
      echo time() - strtotime($new_time_selected);

      echo '<pre>';
      // var_dump ($new_time_selected). '<br>';
      print_r ($new_time_selected). '<br>';

      // echo (strlen($time_selected)). '<br>';
      echo '</pre>';
      $counts++;
      if($counts == 999){
        break;
      }
    }

    function get_product($product_id) {
      $products = read_all_products();
      foreach ($products as $p) {
        if ($p['id'] == $product_id) {
          return $p;
        }
      }
      return false;
    }

    echo time();

     ?>

  </body>
</html>
