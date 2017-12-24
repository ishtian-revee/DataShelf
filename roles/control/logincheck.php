<?php
    session_start();
    require_once "../../data/user_db.php";
    if(isset($_SESSION['is_logged_in']))
    {
        if($_SESSION['is_logged_in'])
        {
            $username = $_SESSION["username"];

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
            $cart = '
            <td width="9%" align="center">
                <a href="cart.php"><h3><font face="calibri" color="#888888">Cart</font></h3></a>
            </td>
            ';
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
            $cart = '';
    }
?>
