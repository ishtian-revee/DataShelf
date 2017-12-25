<?php
  require_once "dbcon.php";
  $sql = "SELECT registration_date from users where username = 'niaz_ds'";
  $result = execute_query($sql);
  $timestamp = mysqli_fetch_assoc($result)['registration_date'];
  echo explode(" ",$timestamp)[0];

?>