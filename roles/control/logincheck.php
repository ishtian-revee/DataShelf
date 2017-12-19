<?php
    session_start();
    require "../../data/user_db.php";
    if(isset($_SESSION['is_logged_in']))
    {
        if($_SESSION['is_logged_in'])
        {
            $username = $_SESSION["username"];
            $name = get_name($username);
            $context =
            '
            <div class="dropdown">
              <button class="dropbtn">'.$username.'&#9662;</button>

              <div class="dropdown-content">
                <a href="profile.php">Profile</a>

                <a href="logout.php">Logout</a>
              </div>
            </div>
            '
            ;
        //    $context = '';
            $target = 'profile.php';
        }
        else
        {
            $context = 'Login';
            $target = 'login.php';
        }
    }
    else
    {
            $context = 'Login
            ';
            $target = 'login.php';
    }
?>
