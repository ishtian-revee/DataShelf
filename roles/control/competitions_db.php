<?php

    require_once "dbcon.php";

    function get_user_competitions()
    {
        $username = $_SESSION['username'];
        $sql = "SELECT * from competitions where username = $username";
        $result = $execute_query($sql);
       
        return $result;
    }

?>