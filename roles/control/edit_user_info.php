<?php

  require "../data/user_db.php";
  session_start();

  if(isset($_POST['username']) and isset($_POST['name']) and
  isset($_POST['email']) and isset($_POST['phone']) and
  isset($_POST['profession']) and isset($_POST['gender']) and
  isset($_POST['day']) and isset($_POST['month']) and
  isset($_POST['year'])){

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $profession = $_POST['profession'];
    $gender = $_POST['gender'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $day."-".$month."-".$year;

    if(update_user_info($username, $name, $email, $phone, $profession, $gender, $dob)){

      header('location:http://localhost/DataShelf/roles/presentation/user/profile.php');
    }else{

      echo "unsuccessful";
    }
  }else{

    echo "data not set";
  }
?>
