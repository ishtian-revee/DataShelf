<?php

  require_once "../../data/admin_db.php";
  require_once "admin_field_validator.php";

  session_start();

  if(isset($_POST['username']) and isset($_POST['name']) and
  isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['gender'])){

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $valid_username = is_username_valid($username);
    $valid_name = is_name_valid($name);
    $valid_email = is_email_valid($email);
    $valid_phone = is_phone_valid($phone);
    $valid_gender = is_gender_valid($gender);

    if($valid_username and $valid_name and $valid_email and
    $valid_phone and $valid_gender){

      if(update_admin_info($username, $name, $email, $phone, $gender)){

        header('location:http://localhost/DataShelf/roles/presentation/admin/admin_profile.php');
      }else{

        echo "unsuccessful";
      }
    }else{

      echo "Invalid inputs!";
    }
  }else{

    echo "Data not set";
  }
?>
