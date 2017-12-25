<?php
    if(!(isset($_SESSION['is_logged_in'])))
    {
        echo "<h1 align='center'>Access Forbidden</h1><hr>";
        die();
    }
?>