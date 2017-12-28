<?php
require_once "../../data/dbcon.php";
function get_dataset_list(){

    $serial_no = 0;

    $sql = "SELECT `title`,`downloads` FROM marketplace_datasets";
    $result = execute_query($sql);

    echo '
    <table border="1" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <th width="4%"><font face="calibri" color="#444444">SL.</font></th>
        <th width="60%"><font face="calibri" color="#444444">Dataset</font></th>
        <th width="12%"><font face="calibri" color="#444444">Downloads</font></th>
        <th width="24%"><font face="calibri" color="#444444">Action</font></th>
      </tr>
    ';

    while($row = mysqli_fetch_array($result)){

      echo '
      <tr>
        <td align="center">
          <p><font face="calibri" color="#888888" size="4"><b>'. $serial_no++ .'.</b></font></p>
        </td>

        <td align="center">
          <p><font face="calibri" color="#888888" size="4"><b>'. $row["title"] .'</b></font></p>
        </td>

        <td align="center">
          <p><font face="calibri" color="#888888" size="4"><b>'. $row["downloads"] .'</b></font></p>
        </td>

        <td align="center">
          <table width="100%" cellspacing="0">
            <tr>
              <td align="center">
                <a href="admin_posts_datasets_details.php">
                  <p><font face="calibri" color="#888888" size="4"><b>View</b></font></p>
                </a>
              </td>

              <td align="center"><p><font face="calibri" color="#888888" size="4"><b>|</b></font></p></td>

              <td align="center">
                <a href="admin_posts_datasets_details.php">
                  <p><font face="calibri" color="#888888" size="4"><b>Delete</b></font></p>
                </a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      ';
    }
  }

?>