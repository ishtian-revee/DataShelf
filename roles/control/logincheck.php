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
        echo "Not set";
        var_dump ($_SESSION);
        echo die();
            $context = 'Login';
            $target = 'login.php';
    }
?>