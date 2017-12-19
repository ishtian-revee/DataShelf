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

   function get_mp_featured_datasets()
   {
       $sql = "SELECT * from marketplace_datasets";
       return execute_query($sql);
        
   }

   function get_mp_datasets_by_user()
   {
       $sql = "SELECT * from marketplace_datasets";
       return execute_query($sql);
        
   }

   function get_description_by_id($id)
   {
        $sql = "SELECT short_description from marketplace_datasets where mds_id = $id";

        $result = execute_query($sql);
       return mysqli_fetch_assoc($result)['short_description'];

   }

   function get_title_by_id($id)
   {
       $sql = "SELECT title from marketplace_datasets where mds_id = $id";

        $result = execute_query($sql);
       return mysqli_fetch_assoc($result)['title'];

   }
   function get_context_by_id($id)
   {
    $sql = "SELECT context from marketplace_datasets where mds_id = $id";
    $result = execute_query($sql);
   return mysqli_fetch_assoc($result)['context'];
   }

   function get_content_by_id($id)
   {

    $sql = "SELECT content from marketplace_datasets where mds_id = $id";

        $result = execute_query($sql);
       return mysqli_fetch_assoc($result)['content'];

   }

   function get_upload_date_by_id($id)
   {

        $sql = "SELECT upload_date from marketplace_datasets where mds_id = $id";
        $result = execute_query($sql);

        return mysqli_fetch_assoc($result)['upload_date'];

   }

   function get_price_by_id($id)
   {
    $sql = "SELECT price from marketplace_datasets where mds_id = $id";
    $result = execute_query($sql);

    return mysqli_fetch_assoc($result)['price'];
   }

?>
