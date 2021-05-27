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

    // echo '<pre>';
    // var_dump(read_all_products());
    // echo '</pre>';


    // echo count(read_all_products());

    function time_arr(){
      $time_arr= [];
      for ($i=0; $i < count(read_all_products()); $i++) {
        $time_selected = read_all_products()[$i]["created_time"];
        $new_time_selected = str_replace("Z","",$time_selected);
        $time_product = time() - strtotime($new_time_selected);
        $time_arr[$i] = $time_product;
      }
      return $time_arr;
    };

// sort time
    function sort_arr(){
      $result = [];
      $coppy_arr = time_arr();
      for ($i=0; $i < count($coppy_arr); $i++) {
        $result[$i] = abs($coppy_arr[$i]);
      }
      sort($result);
      return $result;
    };

    // echo '<pre>';
    // var_dump(sort_arr());
    // echo '</pre>';


    function get_product($product_id) {
      $products = read_all_products();
      foreach ($products as $p) {
        if ($p['id'] == $product_id) {
          return $p;
        }
      }
      return false;
    };

    // test to print result
    $id_array = [1, 3, 4, 6, 12];
    for ($i=0; $i < count($id_array); $i++) {
      $num_id = $id_array[$i];
      echo '<pre>';
      var_dump(get_product($num_id));
      echo '</pre>';
    };



     ?>

  </body>
</html>
