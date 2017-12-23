<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
  require_once "dbcon.php";

  $price = execute_query("SELECT price from marketplace_datasets where mds_id = 23 ");

  echo $price;
?>

