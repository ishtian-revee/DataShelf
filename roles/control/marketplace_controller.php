<?php
    if(isset($_SESSION['is_logged_in']))
    {
        $mine = 
        '
        <td width="4%" align="center">
                <h4><font face="calibri" color="#444444">&middot;</font></h4>
              </td>

              <td width="6%" align="center">
                <a href="marketplace_mine.php">
                  <h4><font face="calibri" color="#888888">Mine</font></h4>
                </a>
              </td>
        ';
    }
    else
    {
        $mine='';
    }
?>