<?php
    require_once "dbcon.php";


    function add_mp_dataset($title,$short_description,$price,$uploader,$context,$content,$data_path,$ss_path,$tags)
    {
        $sql = "INSERT INTO `marketplace_datasets` (`title`, `short_description`, `price`, `uploader`, `context`, `content`, `data_path`, `ss_path`, `tags`)
         VALUES ('$title','$short_description',$price,'$uploader','$context','$content','$data_path','$ss_path','$tags')";
        
    
        return execute_query($sql);
    }

    function get_all_info($mds_id)
    {
        $sql = "SELECT * from marketplace_datasets where mds_id = $mds_id";
        $result = execute_query($sql);

        return mysqli_fetch_assoc($result);
    }
   function get_mp_titles()
   {

   }

   function get_mp_datasets()
   {
       $sql = "SELECT * from marketplace_datasets";

       return execute_query($sql);
   }

   function get_mp_datasets_V2()
   {
       $sql = "SELECT m.mds_id,m.title,u.pp_path,m.short_description,m.uploader,m.tags,m.price,m.downloads,DATEDIFF(CURRENT_TIMESTAMP,m.upload_date) as upload_date from marketplace_datasets m,users u where m.uploader=u.username;";
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

        $sql = "SELECT DATEDIFF(CURRENT_TIMESTAMP,upload_date) as upload_date from marketplace_datasets where mds_id = $id";
        $result = execute_query($sql);

        return mysqli_fetch_assoc($result)['upload_date'];

   }

   function get_price_by_id($id)
   {
    $sql = "SELECT price from marketplace_datasets where mds_id = $id";
    $result = execute_query($sql);

    return mysqli_fetch_assoc($result)['price'];
   }

   function get_bought_items($username)
   {
    $sql = "SELECT * from marketplace_datasets md, purchases pd where pd.mds_id = md.mds_id and pd.username='$username'";
    $result = execute_query($sql);
     return $result;    
   }

?>
