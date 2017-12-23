<?php

require_once "fieldvalidator.php";
require_once "../data/user_db.php";

// $name = $_POST['name'];
// $email = $_POST['email'];
// $username = $_POST['username'];
// $password = $_POST['password'];
// $cpassword = $_POST['confirm'];
// $phone = $_POST['phone'];
// $profession = $_POST['profession'];
// $gender = $_POST['gender'];
// $dob_day = $_POST['day'];
// $dob_month = $_POST['month'];
// $dob_year = $_POST['year'];
// $dob = $dob_day."-".$dob_month."-".$dob_year;

// $nameCheck = is_name_valid($name);
// $emailCheck =  is_email_valid($email);
// $usernameCheck = is_username_valid($username);
// $passwordCheck = is_password_valid($password) and is_password_matching($cpassword,$password);
// $phoneCheck = is_phone_valid($phone);
// $professionCheck = is_profession_valid($profession);
// $genderCheck = is_gender_valid($gender);
// $dateCheck = is_date_valid($dob_day,$dob_month,$dob_year);

// if($nameCheck and $emailCheck and $usernameCheck and $passwordCheck and
// $phoneCheck and $professionCheck and $genderCheck and $dateCheck)
// {
    // if(add_user($name,$email,$username,$password,$phone,$profession,$gender,$dob))
    // {
    //     header("location:../presentation/user/home.html");
    // }
    // else
    // {
    //     echo "Registration Failed";
    // }
// }
// else
// {
//     print_r($errors);
// }

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_pass = $_POST['confirm'];
$phone = $_POST['phone'];
$profession = $_POST['profession'];
$gender = $_POST['gender'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$term = $_POST['term'];

$valid_form = is_form_data_valid($name, $email, $username, $password, $confirm_pass,
$phone, $profession, $gender, $day, $month, $year, $term);

if($valid_form){

  $dob = $day."-".$month."-".$year;

  if(add_user($name, $email, $username, $password, $phone, $profession, $gender, $dob)){

      header("location:../presentation/user/home.html");
  }else{

      echo "Registration Failed";
  }
}

?>
