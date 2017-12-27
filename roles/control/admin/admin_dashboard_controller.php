<?php
 require_once "../../data/user_db.php";
 require_once "../../data/marketplace_db.php";
 //require_once "../../data/admin_db.php";

 function get_total_active_admins()
 {
     $sql = "SELECT COUNT(*) as total from admins ";
     $result = execute_query($sql);
     return mysqli_fetch_assoc($result)['total'];

 }
 $pending = get_daily_pending_user_count();
 $dataset = get_total_dataset_count();
 $daily_upload = get_daily_download_count();
 $downloads = get_total_download_count();
 $active_admins = get_total_active_admins();
?>