<?php
require_once "../../data/admin_db.php";

if(isset($_SESSION['is_logged_in']))
{
    $admin_info = get_admin_data_V2($_SESSION['username']);
    $name = $admin_info['name'];
    $username = $admin_info['username'];
    $email = $admin_info['email'];
    $hire_date = $admin_info['hire_date'];
    $gender = $admin_info['gender'];
    $phone = $admin_info['phone'];
}

?>
