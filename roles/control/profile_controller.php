<?php
require_once "../../data/user_db.php";
require_once "../../common/timesaver.php";

function fileupload()
{
    
}

if(isset($_SESSION['is_logged_in']))
{
    $user_info = get_user_data_V2($_SESSION['username']);
    $name = $user_info['name'];
    $username = $user_info['username'];
    $email = $user_info['email'];
    $profession = $user_info['profession'];
    $dob = $user_info['dob'];
    $year = explode("-",$dob)[0];
    $month = explode("-",$dob)[1];
    $day = explode("-",$dob)[2];    
    $gender = $user_info['gender'];
    $phone = $user_info['phone'];
    $registration_date = $user_info['registration_date'];
    $joined= deal_with_day($registration_date);
    $joinedon = get_registration_date();

}


?>