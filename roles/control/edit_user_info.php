<?php

  require_once "../data/user_db.php";
  require_once "fieldvalidator.php";

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
    


    $valid_username = is_username_valid($username);
    $valid_name = is_name_valid($name);
    $valid_email = is_email_valid($email);
    $valid_phone = is_phone_valid($phone);
    $valid_profession = is_profession_valid($profession);
    $valid_gender = is_gender_valid($gender);
    $valid_dob = is_date_valid($day, $month, $year);

    if($valid_username and $valid_name and $valid_email and $valid_phone and
    $valid_profession and $valid_gender and $valid_dob){

      if(isset($_FILES))
      {
        $time    = microtime(true);
        $moving_path ="../uploads/pp/".$_FILES['profile_picture']['name'];
        $presenatation_rel_path = "../../uploads/pp/".$_FILES['profile_picture']['name'];
        move_uploaded_file($_FILES['profile_picture']['tmp_name'],$moving_path);
        update_pp_path($presenatation_rel_path);
       
      }

      $dob = $day."-".$month."-".$year;

      if(update_user_info($username, $name, $email, $phone, $profession, $gender, $dob)){

        header('location:http://localhost/DataShelf/roles/presentation/user/profile.php');
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
