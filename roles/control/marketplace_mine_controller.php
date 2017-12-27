<?php
    require "../../data/marketplace_db.php";
    if(!(isset($_SESSION['is_logged_in'])))
    {
        echo "<h1 align='center'>Access Forbidden</h1><hr>";
        die();
    }
    else
    {
        $mine_count = get_mine_dataset_count();
    }
?>