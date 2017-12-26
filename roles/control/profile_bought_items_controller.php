<?php
require_once "../../data/user_db.php";
require_once "../../data/marketplace_db.php";
require_once "../../common/timesaver.php";
if(isset($_SESSION['is_logged_in']))
{
    $user_info = get_user_data_V2($_SESSION['username']);
    $name = $user_info['name'];
    $phone = $user_info['phone'];
    $registration_date = $user_info['registration_date'];
    $joined= deal_with_day($registration_date);
    $pp_path = get_pp_path();
    
}

function load_bought_items()
{
    $result = get_bought_items($_SESSION['username']);
    //$pp_path = get_pp_path();
    
    

    while($all_info = mysqli_fetch_assoc($result))
    {
        $mds_id = $all_info['mds_id'];
        $title =  $all_info['title'];
        $uploader = $all_info['uploader'];
        $short_description =  $all_info['short_description'];
        $pz = $all_info['price'];
        $price = $pz == 0 ? "FREE": '$ '.$pz;
        $tags = $all_info['tags'];
        $download = $all_info['downloads'];
        //$downloads = $download==0?"None has purchased this datasest yet. Don't miss the chance to be the first one !":$download+ "downloads";
        $date = get_upload_date_by_id($mds_id);
        $upload_date = ($date == 0 ? "Today" : $date." days ago");
        $data_path = $all_info['data_path'];
        //$pp_path = get_pp_path();
        
      
        $data = '
        
        <tr>
        <td colspan="2" align="center">
          <img src="../res/website/ic_user_3.png" alt="User Profile Pic" width="50">
        </td>

        <td colspan="6">
          <p><font face="calibri" color="#444444" size="4"><b>'.$title.'</b><br>'.$short_description.'
          <p><font face="calibri" color="#888888" size="3"><b>'.$uploader.'</b> &middot;'.$upload_date.' &middot; <b>Tags:</b> '.$tags.'</font></p>
        </td>

        <td colspan="1" align="center">
          <label><font face="calibri" color="#888888" size="4">'.$price.'</font></label><br>
          <label><font face="calibri" color="#888888" size="4"></font></label>
        </td>

        <td colspan="1" align="center">
            <a href="'.$data_path.'">
          <button type="button" name="download">Download</button>
            </a>
        </td>
    
      </tr>

        ';

        echo $data;
    }
}

?>