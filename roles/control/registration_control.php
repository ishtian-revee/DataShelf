<?php

require "fieldvalidator.php";
require "../data/user_db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['confirm'];
$phone = $_POST['phone'];
$profession = $_POST['profession'];
$gender = $_POST['gender'];
$dob_day = $_POST['day'];
$dob_month = $_POST['month'];
$dob_year = $_POST['year'];
$dob = $dob_day."-".$dob_month."-".$dob_year;


$nameCheck = is_name_valid($name);
$emailCheck =  is_email_valid($email);
$usernameCheck = is_username_valid($username);
$passwordCheck = is_password_valid($password) and is_password_matching($cpassword,$password);
$dateCheck = is_date_valid($dob_day,$dob_month,$dob_year);


if($nameCheck and $emailCheck and $usernameCheck and $passwordCheck and $dateCheck)
{
    if(add_user($name,$email,$username,$password,$phone,$profession,$gender,$dob))
    {
        header("location:../presentation/user/home.html");
    }
    else
    {
        echo "Registration Failed";
    }
}
else
{
    print_r($errors);
}


?>