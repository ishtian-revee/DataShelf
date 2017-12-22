<?php

  require "admin_field_validator.php";
  require "../data/admin_db.php";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_pass = $_POST['confirm'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $day = $_POST['day'];
  $month = $_POST['month'];
  $year = $_POST['year'];

  $valid_form = is_form_data_valid($name, $email, $username, $password, $confirm_pass,
  $phone, $gender, $day, $month, $year);

  if($valid_form){

    $hire_date = $day."-".$month."-".$year;

    if(add_user($name, $email, $username, $password, $phone, $profession, $gender, $hire_date)){

        header("location:../presentation/admin/admin_users_admin.php");
    }else{

        echo "Registration Failed";
    }
  }
?>
