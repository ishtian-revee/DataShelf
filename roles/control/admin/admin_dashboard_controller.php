<?php
 require_once "../../data/user_db.php";
 require_once "../../data/marketplace_db.php";
 require_once "../../data/purchase_db.php";
 //require_once "../../data/admin_db.php";

 function get_total_active_admins()
 {
     $sql = "SELECT COUNT(*) as total from admins ";
     $result = execute_query($sql);
     return mysqli_fetch_assoc($result)['total'];

 }
 function load_top_5()
 {
     $top5 = get_top_5_datasets();

     for($i=0;$i<sizeof($top5);$i++)
     {
         $title = $top5[$i]['title'];
         $downloads = $top5[$i]['downloads'];
         $SL = $i+1;
         
     echo 
     '
                 <tr>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">'.$SL.'</b></font></p></td>
                      <td><p><font face="calibri" color="#888888" size="4">'.$title.'</b></font></p></td>
                      <td align="center"><p><font face="calibri" color="#888888" size="4">'.$downloads.'</b></font></p></td>
                    </tr>
     ';
     }

 }

 $pending = get_daily_pending_user_count();
 $dataset = get_total_dataset_count();
 $daily_upload = get_daily_download_count();
 $downloads = get_total_download_count();
 $active_admins = get_total_active_admins();
 $daily_transection = get_daily_transection();
 $total_users = get_total_user_count();
?>