<?php
require_once "../../data/user_db.php";
require_once "../../common/timesaver.php";
if(isset($_SESSION['is_logged_in']))
{
    $user_info = get_user_data_V2($_SESSION['username']);
    $name = $user_info['name'];
    
    $phone = $user_info['phone'];
    $registration_date = $user_info['registration_date'];
    $joined= deal_with_day($registration_date);
}

?>