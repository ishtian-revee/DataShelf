<?php
    session_start();
    if(!(isset($_SESSION['admin_username'])))
    {
        echo "<h1 align='center'>Restricted Access</h1><hr>";
        echo "<h1 align='center'Redirecting to login page</h1>";
        header( "refresh:5; url=http://localhost/DataShelf/roles/presentation/admin/admin_login.php" ); 
        die();
    }
?>