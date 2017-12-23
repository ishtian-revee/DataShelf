<?php

    require_once "dbcon.php";
    require_once "marketplace_db.php";
    session_start();
    function add_to_cart($username,$mds_id)
    {

        $sql = "INSERT INTO `carts`(`username`, `mds_id`) VALUES ('$username','$mds_id')";
        return execute_query($sql);
    }
    function add_to_cart_V2($mds_id)
    {
        $username = $_SESSION['username'];
        // $price = 0;
        $price = get_price_by_id($mds_id);
        $sql = "INSERT INTO `carts`(`username`, `mds_id`, `price`) VALUES ('$username','$mds_id','$price')";
        return execute_query($sql);
    }
    function remove_from_cart($username,$mds_id)
    {
        $sql = "DELETE FROM `carts` WHERE `username` = '$username' AND `mds_id`= '$mds_id'";
        return execute_query($sql);

    }
    function remove_from_cart_V2($mds_id)
    {
        $username = $_SESSION['username'];
        $sql = "DELETE FROM `carts` WHERE `username` = '$username' AND `mds_id`= '$mds_id'";
        $result = execute_query_V2($sql);
        return $result==0?false:true;
    }

?>