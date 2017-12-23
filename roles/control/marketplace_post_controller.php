<?php
require_once "../../data/marketplace_db.php";
if(isset($_GET['id']))
{
   
    $mds_id = $_GET['id'];

    $title = get_title_by_id($mds_id);
    $short_description = get_description_by_id($mds_id);
    $price = get_price_by_Id($mds_id);
    $contextd = get_context_by_id($mds_id);
    $contentd = get_content_by_id($mds_id);
    $date = get_upload_date_by_id($mds_id);
    $upload_date = ($date == 0 ? "Today" : $date." days ago");
     
}
   
?>