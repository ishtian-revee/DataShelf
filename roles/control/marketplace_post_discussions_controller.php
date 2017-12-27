<?php
require_once "../../data/marketplace_db.php";

if(isset($_GET['id']))
{
   
    $mds_id = $_GET['id'];
    $all_info = get_all_info($mds_id);

    $title =  $all_info['title'];
    $short_description =  $all_info['short_description'];
    $pz = $all_info['price'];
    $price = $pz == 0 ? "FREE": '$ '.$pz;
    $download = $all_info['downloads'];
    $downloads = $download==0?"None has purchased this datasest yet. Don't miss the chance to be the first one !":$download. " downloads";
    $date = get_upload_date_by_id($mds_id);
    $upload_date = ($date == 0 ? "Today" : $date." days ago");
 
}

?>