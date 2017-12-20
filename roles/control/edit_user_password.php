<?php

  require "../data/user_db.php";
  require "fieldvalidator.php";
  session_start();

  if(isset($_POST['current_password']) and isset($_POST['new_password']) and
  isset($_POST['retype_password'])){

    $username = $_SESSION['username'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $retype_password = $_POST['retype_password'];

    $valid_current_password = is_password_valid($current_password);
    $valid_new_password = is_password_valid($new_password);
    $valid_retype_password = is_password_valid($retype_password);
    $password_matching = is_password_matching($new_password, $retype_password);

    if($valid_current_password and $valid_new_password and
    $valid_retype_password){

      if($password_matching){

        if(update_user_password($username, $new_password)){

          header('location:http://localhost/DataShelf/roles/presentation/user/profile.php');
        }else{

          echo "unsuccessful";
        }
      }else{

        echo "Password didn't match!";
      }
    }else{

      echo "Invalid password input!";
    }
  }else{

    echo "Data not set!";
  }
?>
