<?php
    $title =  $all_info['title'];
    $short_description =  $all_info['short_description'];
    $price = $all_info['price']; 
    $downloads = $all_info['downloads'];
    $date = get_upload_date_by_id($mds_id);
    $upload_date = ($date == 0 ? "Today" : $date." days ago");
    $ss_src = $all_info['ss_path'];

    $data_path = $all_info['data_path'];
    $filename = explode('/',$data_path)[5];
    $filesize = human_filesize(filesize(realpath($data_path)));
?>