<?php
    session_start();
    if(!(isset($_SESSION['admin_username'])))
    {
        echo '
          <br><h2 align="center"><font face="calibri" color="#444444">Restricted!!! You cannot access to this page.</font></h2>
        ';

        echo '
          <br><h4 align="center"><font face="calibri" color="#888888">Redirecting to Login page.</font></h4>
          <hr noshade="noshde">
        ';
        header( "refresh:5; url=http://localhost/DataShelf/roles/presentation/admin/admin_login.php" );
        die();
    }
?>
