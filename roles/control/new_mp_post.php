<?php
    require "../data/marketplace_db.php";
    session_start();
    
    $is_file_uploaded = FALSE;
   
   if(
       isset($_POST['title']) and
       isset($_POST['short_description']) and
       isset($_POST['context']) and
       isset($_POST['contents']) and
    //    isset($_FILES['datafile']) and
    //    isset($_FILES['data_screenshots']) and
       isset($_POST['price']) and
       isset($_POST['tags'])
    )
    {
       $uploader = $_SESSION['name'];
       $title = $_POST['title'] ;
       $short_description = $_POST['short_description'] ;
      
       $context =  $_POST['context'] ;
       $content = $_POST['contents'] ;

       $datafile_name = $_FILES['data_file']['name'] ;
       $datafile_src = $_FILES['data_file']['tmp_name'] ;

       $data_sc_name = $_FILES['data_screenshots']['name'];
       $data_sc_src = $_FILES['data_screenshots']['tmp_name'];
       
       $price = $_POST['price'] ;
       $tags = $_POST['tags'];
        
       //creating individual folder for each user to store their uploads
       $file_path = '../uploads/'.$_SESSION['username'];
       $data_file_dest = $file_path.'/'.$datafile_name;
       $data_sc_dest = $file_path.'/'.$data_sc_name;

      
        if(!is_dir($file_path))
        {
            
            mkdir($file_path, 0777, true);
        }

        if(move_uploaded_file($datafile_src,$data_file_dest) and move_uploaded_file($data_sc_src,$data_sc_dest))
        {
            global $is_file_uploaded;
            $is_file_uploaded = TRUE;
        }

        if($is_file_uploaded)
        {
            if(add_mp_dataset($title,$short_description,$price,$uploader,$context,$content,$data_file_dest,$data_sc_dest,$tags))
            {
                header('location:http://localhost/DataShelf/roles/presentation/user/marketplace_new_dataset.php?status=success');
            }
        }
        
       
    }
    else
    {
        echo "<h1 align='center'>Upload Failed</h1>";
    }

?>