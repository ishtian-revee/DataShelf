<?php
    session_start();
    if(isset($_SESSION['is_logged_in']))
    {
        if($_SESSION['is_logged_in'])
        {
            $context = $_SESSION['username'];
        //    $context = '';
            $target = '#';
        }
        else
        {
            $context = 'Login';
            $target = 'login.php';
        }
    }
    else
    {
            $context = 'Login';
            $target = 'login.php';
    }
?>