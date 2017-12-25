<?php

    require "admin_field_validator.php";
    require "../../data/admin_db.php";

    if(!empty($_POST['username']) and isset($_POST['username']) and !empty(['password']) and isset($_POST['username']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(is_username_valid($username) and is_password_valid($password))
        {
            if($password == (get_user_password($username)))
            {
                session_start();
                $_SESSION['is_logged_in'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['name'] = get_name($username);

                header('location:../presentation/admin/admin_dashboard.php');
            }
        }
        else
        {
           echo ("login failed");
        }
    }

?>
