<?php
require_once "../../data/marketplace_db.php";


 //Author : Jeffrey Sambells
 // Source : http://jeffreysambells.com/2012/10/25/human-readable-filesize-php
 //Minor modification over the author's one
function human_filesize($bytes, $decimals = 2) {
    $size = array('Bytes','kB','MB','GB','TB','PB','EB','ZB','YB');
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @" ".$size[$factor];
}
/////////////////////////////////////////////////

if(isset($_GET['id']))
{
   
    $mds_id = $_GET['id'];
    $all_info = get_all_info($mds_id);

    $title =  $all_info['title'];
    $short_description =  $all_info['short_description'];
    $pz = $all_info['price'];
    $price = $pz == 0 ? "FREE": '$ '.$pz;
    $download = $all_info['downloads'];
    $downloads = $download==0?"None has purchased this datasest yet. Don't miss the chance to be the first one !":$download+ "downloads";
    $date = get_upload_date_by_id($mds_id);
    $upload_date = ($date == 0 ? "Today" : $date." days ago");
    $ss_src = $all_info['ss_path'];
    

    $contextd = $all_info['context'];
    $contentd =  $all_info['content'];
    $ss_src = $all_info['ss_path'];

    $data_path = $all_info['data_path'];
    $filename = explode('/',$data_path)[5];
    $filesize = human_filesize(filesize(realpath($data_path)));
    
}

?>