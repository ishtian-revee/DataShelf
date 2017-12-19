<?php

if(isset($_SESSION['is_logged_in']))
{
    $mine = 
    '
    <td width="4%" align="center">
            <h4><font face="calibri" color="#444444">&middot;</font></h4>
          </td>

          <td width="6%" align="center">
            <a href="competitions_mine.php">
              <h4><font face="calibri" color="#888888">Mine</font></h4>
            </a>
          </td>
    ';
    $create_competition = '
    <td align="right">
    <a href="competitions_create_competition.php">
      <h3><font face="calibri" color="#888888">Create Competition</font></h3>
    </a>
  </td>
    ';
}
else
{
    $mine='';
    $create_competition='';
}

?>