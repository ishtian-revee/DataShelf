<?php
    require "dbcon.php";

   function get_mp_titles()
   {

   }

   function get_mp_datasets()
   {
       $sql = "SELECT * from marketplace_datasets";

       return execute_query($sql);

   }


?>