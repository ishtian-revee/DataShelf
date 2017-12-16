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
                echo "Login Sucessful";
            }
        }
        else
        {
           
        }
    }

?>