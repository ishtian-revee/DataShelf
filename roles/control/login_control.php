<?php

    require "fieldvalidator.php";
    require "../data/user_db.php";

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
                $_SESSION['password'] = $password;

                $_SESSION['name'] = get_name($username);
                $_SESSION['email'] = get_email($email);
                $_SESSION['phone'] = get_phone($phone);
                $_SESSION['profession'] = get_profession($profession);
                $_SESSION['gender'] = get_gender($gender);
                $_SESSION['dob'] = get_dob($dob);

                header('location:../presentation/user/home.php');
            }
        }
        else
        {
           echo ("login failed");
        }
    }

?>
