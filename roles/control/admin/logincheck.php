<?php
    session_start();
    if(!(isset($_SESSION['admin_username'])))
    {
        echo "<h1 align='center'>Restricted Access</h1>";
        echo "<h3 align='center'>Redirecting to login page</h4><hr>";
        header( "refresh:5; url=http://localhost/DataShelf/roles/presentation/admin/admin_login.php" ); 
        die();
    }
?>