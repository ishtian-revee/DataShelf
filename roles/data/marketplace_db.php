<?php
    require_once "dbcon.php";

    // create data -------------------------------------------------------------

    function add_mp_dataset($title,$short_description,$price,$uploader,$context,$content,$data_path,$ss_path,$tags)
    {
        $sql = "INSERT INTO `marketplace_datasets` (`title`, `short_description`, `price`, `uploader`, `context`, `content`, `data_path`, `ss_path`, `tags`)
         VALUES ('$title','$short_description',$price,'$uploader','$context','$content','$data_path','$ss_path','$tags')";
        return execute_query($sql);
    }

    // create data -------------------------------------------------------------



    // retrieve data -----------------------------------------------------------

    function get_all_info($mds_id)
    {
        $sql = "SELECT * from marketplace_datasets where mds_id = $mds_id";
        $result = execute_query($sql);

        return mysqli_fetch_assoc($result);
    }

   function get_mp_titles()
   {

   }

   function get_user_datasets()
   {
      $uploader = $_SESSION['username'];
      $sql = "SELECT * from marketplace_datasets where uploader = '$uploader'";

      return execute_query($sql);
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

   function get_mp_featured_datasets_V2()
   {
      // $sql = "SELECT m.mds_id,m.title,u.pp_path,m.short_description,m.uploader,m.tags,m.price,m.downloads,DATEDIFF(CURRENT_TIMESTAMP,m.upload_date) as upload_date from marketplace_datasets m,users u where  m.status=1;";
      $sql = "SELECT m.mds_id,m.title,u.pp_path,m.short_description,m.uploader,m.tags,m.price,m.downloads,DATEDIFF(m.upload_date,CURRENT_TIMESTAMP) as upload_date from marketplace_datasets m,users u where m.uploader=u.username and m.status=1";

       return execute_query($sql);
   }

   function get_mp_all_datasets_V2()
   {
       $sql = "SELECT m.mds_id,m.title,u.pp_path,m.short_description,m.uploader,m.tags,m.price,m.downloads,DATEDIFF(m.upload_date,CURRENT_TIMESTAMP) as upload_date from marketplace_datasets m,users u where m.uploader=u.username";

       return execute_query($sql);
   }

   function get_mp_mine_datasets_V2()
   {
    session_start();
    $username = $_SESSION['username'];
    $sql = "SELECT m.mds_id,m.title,u.pp_path,m.short_description,m.uploader,m.tags,m.price,m.downloads,DATEDIFF(m.upload_date,CURRENT_TIMESTAMP) as upload_date from marketplace_datasets m,users u where m.uploader=u.username and m.uploader = '$username' ;";
    return execute_query($sql);
   }

    function get_total_dataset_count()
    {
        $sql ="SELECT count(*) as total from marketplace_datasets";
        $result = execute_query($sql);
        return mysqli_fetch_assoc($result)['total'];

    }

    function get_mine_dataset_count()
    {
        //session_start();
        $username = $_SESSION['username'];
        $sql ="SELECT count(*) as total from marketplace_datasets where uploader = '$username'";
        $result = execute_query($sql);
        return mysqli_fetch_assoc($result)['total'];


    }

    function get_total_dataset_count_today()
    {
       // $sql ="SELECT count(*) as total from marketplace_datasets where  registration_data(`timestamp`) = CURDATE()";

    }

    function get_daily_download_count()
    {
        $sql = "SELECT COUNT(*) as total FROM marketplace_datasets where  CAST(upload_date AS DATE) = CURRENT_DATE()";
        $result = execute_query($sql);
        return mysqli_fetch_assoc($result)['total'];
    }

    function get_total_download_count()
    {
        $sql ="SELECT SUM(downloads) as total from marketplace_datasets";
        $result = execute_query($sql);
        return mysqli_fetch_assoc($result)['total'];
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

   function get_mp_featured_count()
   {
    $sql = "SELECT COUNT(*) as total FROM marketplace_datasets where status=1";
    $result = execute_query($sql);
    return mysqli_fetch_assoc($result)['total'];
   }

   function get_mp_all_count()
   {
    $sql = "SELECT COUNT(*) as total FROM marketplace_datasets";
    $result = execute_query($sql);
    return mysqli_fetch_assoc($result)['total'];
   }

   function get_mine_count()
   {
        $username = $_SESSION['username'];
        $sql = "SELECT COUNT(*) as total FROM marketplace_datasets where username = '$username'";
        $result = execute_query($sql);
        return mysqli_fetch_assoc($result)['total'];
   }

   function search_by_anything_all($term)
   {
    
     session_start();
     $username = $_SESSION['username'];       
     $sql = "SELECT  distinct m.mds_id,m.title,u.pp_path,m.short_description,m.uploader,m.tags,m.price,m.downloads,DATEDIFF(m.upload_date,CURRENT_TIMESTAMP) as upload_date from marketplace_datasets m,users u where m.uploader=u.username and m.uploader = '$username' 
     and m.title LIKE '%$term%' or m.short_description LIKE '%$term%' or m.price LIKE '%$term%' or
     m.uploader LIKE '%$term%' or m.tags LIKE '%$term%' or m.downloads LIKE '%$term%' or m.upload_date LIKE '%$term%';
     ;";

     
     return execute_query($sql);
   }

   function search_by_anything_mine($term)
   {
    
     session_start();
     $username = $_SESSION['username'];       
     $sql = "SELECT distinct m.mds_id,m.title,u.pp_path,m.short_description,m.uploader,m.tags,m.price,m.downloads,DATEDIFF(m.upload_date,CURRENT_TIMESTAMP) as upload_date from marketplace_datasets m,users u where m.uploader=u.username and m.uploader = '$username' and m.uploader = '$username'
    and m.title LIKE '%$term%' or m.short_description LIKE '%$term%' or m.price LIKE '%$term%' or
     m.uploader LIKE '%$term%' or m.tags LIKE '%$term%' or m.downloads LIKE '%$term%' or m.upload_date LIKE '%$term%';
     ;";
     return execute_query($sql);
   }

   function search_by_anything_featured($term)
   {
    
     session_start();
     $username = $_SESSION['username'];       
     $sql = "SELECT distinct m.mds_id,m.title,u.pp_path,m.short_description,m.uploader,m.tags,m.price,m.downloads,DATEDIFF(m.upload_date,CURRENT_TIMESTAMP) as upload_date from marketplace_datasets m,users u where m.uploader=u.username and m.uploader = '$username' and m.status=1 
     and m.title LIKE '%$term%' or m.short_description LIKE '%$term%' or m.price LIKE '%$term%' or
     m.uploader LIKE '%$term%' or m.tags LIKE '%$term%' or m.downloads LIKE '%$term%' or m.upload_date LIKE '%$term%';
     ;";
     return execute_query($sql);
   }
   
   

   // retrieve data -----------------------------------------------------------

?>
