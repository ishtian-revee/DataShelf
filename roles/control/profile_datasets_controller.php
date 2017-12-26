<?php
require_once "../../data/user_db.php";
require_once "../../common/timesaver.php";
require_once "../../data/marketplace_db.php";

function load_datasets()
{
    $user_datasets = get_user_datasets();    
    $data = '';
    while($all_info = mysqli_fetch_assoc($user_datasets))
    {
            
        $pp_path = $_SESSION['pp_path'];
        $title = $all_info['title'];
        $short_description = $all_info['short_description'];
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


        $data = 
        '
        <tr>
        <td colspan="2" align="center">
          <img src="'.$pp_path.'" alt="User Profile Pic" width="50">
        </td>

        <td colspan="6">
          <a href="http://localhost/DataShelf/roles/presentation/user/marketplace_post.php?id='.$mds_id.'">
            <p><font face="calibri" color="#444444" size="4"><b>'.$title.'</b><br>Anonymized credit card transactions
              labeled as fraudulent or genuine</font></p>
          </a>
          <p><font face="calibri" color="#888888" size="3"><b>'.$uploader.'</b> &middot; '.$upload_date.' &middot; <b>Tags:</b> crime, finance</font></p>
        </td>

        <td colspan="2" align="center">
          <label><font face="calibri" color="#888888" size="4">'.$price.'</font></label><br>
          <label><font face="calibri" color="#888888" size="4">'.$download.' downloads</font></label>
        </td>
      </tr>
        ';
        echo $data;
    }
}

if(isset($_SESSION['is_logged_in']))
{
    $user_info = get_user_data_V2($_SESSION['username']);
    $name = $user_info['name'];
    $username = $user_info['username'];
    $email = $user_info['email'];
    $profession = $user_info['profession'];
    $dob = $user_info['dob'];
    $gender = $user_info['gender'];
    $phone = $user_info['phone'];
    $registration_date = $user_info['registration_date'];
    $joined= deal_with_day($registration_date);
    $pp_path = $user_info['pp_path'];
    //$user_datasets = get_user_datasets();
   

}

?>