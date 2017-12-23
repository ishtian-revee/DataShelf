<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
 if(isset($_REQUEST['name']))
 {
     echo "Your name is : ".$_REQUEST['name'];
 }
?>