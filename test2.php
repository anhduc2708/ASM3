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

// // add all detail
//     function read_all_products() {
//       $file_name = 'products.csv';
//       $fp = fopen($file_name, 'r');
//       $first = fgetcsv($fp);
//       $products = [];
//       while ($row = fgetcsv($fp)) {
//         $i = 0;
//         $product = [];
//         foreach ($first as $col_name) {
//           $product[$col_name] =  $row[$i];
//           $i++;
//         }
//         $products[] = $product;
//       }
//       return $products;
//     }
//
//     // echo '<pre>';
//     // var_dump(read_all_products());
//     // echo '</pre>';
//
//  // create function with real id and caculate time
//     function time_arr(){
//       $time_arr= [];
//       for ($i=0; $i < count(read_all_products()); $i++) {
//         $time_selected = read_all_products()[$i]["created_time"];
//         $new_time_selected = str_replace("Z","",$time_selected);
//         $time_product = time() - strtotime($new_time_selected);
//         $time_arr[$i] = abs($time_product);
//       }
//       asort($time_arr);
//       return $time_arr;
//     };
//
//     // echo '<pre>';
//     // var_dump(time_arr()[0]);
//     // echo '</pre>';
//
//
// //  the new product array result
//
//   function new_product_arr(){
//     $time_arr = time_arr();
//     $id_all_products = array_keys($time_arr);
//     $all_products_arr = read_all_products();
//     $result = [];
//     for ($i=0; $i <10; $i++) {
//       $result[$i] = $all_products_arr[$id_all_products[$i] - 1];
//     }
//     return $result;
//
//   };
// // new_product_arr();
//   echo '<pre>';
//   var_dump(new_product_arr());
//   echo '</pre>';
//
//
// // final part
//     function get_product($product_id) {
//       $products = read_all_products();
//       foreach ($products as $p) {
//         if ($p['id'] == $product_id) {
//           return $p;
//         }
//       }
//       return false;
//     };
//
//
// // test to print result
//     // $id_array = [1, 3, 4, 6, 12];
//     // for ($i=0; $i < count($id_array); $i++) {
//     //   $num_id = $id_array[$i];
//     //   echo '<pre>';
//     //   var_dump(get_product($num_id));
//     //   echo '</pre>';
//     // };



     ?>

  </body>
</html>
