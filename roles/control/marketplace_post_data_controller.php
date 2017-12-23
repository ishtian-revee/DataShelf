<?php
require_once "../../data/marketplace_db.php";
if(isset($_GET['id']))
{
   
    $mds_id = $_GET['id'];

    $all_info = get_all_info($mds_id);

    $title =  $all_info['title'];
    $short_description =  $all_info['short_description'];
    $price = $all_info['price']; 
    $contextd = $all_info['context'];
    $contentd =  $all_info['content'];
    $date = get_upload_date_by_id($mds_id);
    $upload_date = ($date == 0 ? "Today" : $date." days ago");
    $ss_src = $all_info['ss_path'];

    $filename ="nothing";
    $filesize = "adfadf";
    //$data_path = $all_info[''da]
    $preview = "";
}

?>