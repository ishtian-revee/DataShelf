<?php

if(isset($_SESSION['is_logged_in']))
{
    $new_topic = 
    '
    <a href="competitions_post_discussions.php">
            <h3><font face="calibri" color="#888888">New Topic</font></h3>
          </a>
    ';
}
else
{
    $new_topic='';
   
}

?>