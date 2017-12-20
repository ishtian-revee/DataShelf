<?php
    session_start();
    require "../../data/user_db.php";
    if(isset($_SESSION['is_logged_in']))
    {
        if($_SESSION['is_logged_in'])
        {
            $username = $_SESSION["username"];
            $password = $_SESSION["password"];
            $name = get_name($username);
            $email = get_email($username);
            $phone = get_phone($username);
            $profession = get_profession($username);
            $gender = get_gender($username);
            $dob = get_dob($username);

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
            $context = 'Login';
            $target = 'login.php';
    }
?>
