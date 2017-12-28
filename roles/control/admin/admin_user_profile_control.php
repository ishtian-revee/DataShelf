<?php
require_once "../../data/user_db.php";


    function deal_with_day($day)
    {
        if($day>=365)
        {
            $year = (int)($day/365);
            return $year==1?$year." year ago":$year." years ago";
        }
        else if($day>=30)
        {
            $month = (int)($day/30);
            return $month==1?$month." month ago":$month." months ago";

        }
        else
        {
            return $day==0?"Today":($day==1?$day." day ago":$day." days ago");
        }
        
    }

if(isset($_GET['type']) and isset($_GET['username']))
{
    $type = $_GET['type'];

    if($type == 'user')
    {
        $id = $_GET['username'];
        $user_info = get_user_data_V2($id);
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
        // $joinedon = get_registration_date();
        $pp_path = $user_info['pp_path'];

    }

    else

    {
        $profession = '';
        $sql =  "SELECT * from admins";
        $result = execute_query($sql);
        $user_info = mysqli_fetch_assoc($result);
        
        $id = $_GET['username'];
        $name = $user_info['name'];
        $username = $user_info['username'];
        $email = $user_info['email'];
        $year = '';
        $month = '';
        $day = '';
        $dob = '';
        $registration_date = '';
       // $profession = $user_info['profession'];
        // $dob = $user_info['dob'];
        // $year = explode("-",$dob)[0];
        // $month = explode("-",$dob)[1];
        // $day = explode("-",$dob)[2];    
        $gender = $user_info['gender'];
        $phone = $user_info['phone'];
        //$registration_date = $user_info['registration_date'];
        $joined= deal_with_day($registration_date);
        // $joinedon = get_registration_date();
        $pp_path = $user_info['pp_path'];
        

    }

 
    

}

?>