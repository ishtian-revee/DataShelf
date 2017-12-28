<?php

    require_once "fieldvalidator.php";
    require_once "../data/user_db.php";

    if(!empty($_POST['username']) and isset($_POST['username']) and !empty(['password']) and isset($_POST['username']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(is_username_valid($username) and is_password_valid($password))
        {
            if($password == (get_user_password($username)))
            {
                session_start();
                $_SESSION['is_logged_in'] =  true;
                $_SESSION['username'] = $username;
                $_SESSION['name'] = get_name($username);
                $_SESSION['pp_path'] = get_pp_path();

                header('location:../presentation/user/home.php');
            }
        }
        else
        {
           echo ("<hr>login failed");
        }
    }

?>
