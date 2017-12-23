<?php

    require_once "dbcon.php";

    function add_to_cart($username,$mds_id)
    {
        $sql = "INSERT INTO `carts`(`username`, `mds_id`) VALUES ('$username','$mds_id')";
        return execute_query($sql);
    }
    function add_to_cart_V2($mds_id)
    {
        $username = $_SESSION['username'];
        $sql = "INSERT INTO `carts`(`username`, `mds_id`) VALUES ('$username','$mds_id')";
        return execute_query($sql);
    }
    function remove_from_cart($username,$mds_id)
    {
        $sql = "DELETE FROM `carts` WHERE `username` = $username,`mds_id`= $mds_id";
    }
    function remove_from_cart_V2($mds_id)
    {
        $username = $_SESSION['username'];
        $sql = "DELETE FROM `carts` WHERE `username` = $username,`mds_id`= $mds_id";
    }

?>