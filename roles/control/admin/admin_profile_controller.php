<?php
require "../../data/admin_db.php";

if(isset($_SESSION['is_admin'])){

  if($_SESSION['is_admin']){

    $admin_info = get_admin_data_V2($_SESSION['admin_username']);
    $name = $admin_info['name'];
    $username = $admin_info['username'];
    $email = $admin_info['email'];
    $gender = $admin_info['gender'];
    $phone = $admin_info['phone'];
    $hire_date = $admin_info['hire_date'];
  }else{

    echo "Logged in: false";
  }
}else {
  echo "Logged in not set";
}

?>
