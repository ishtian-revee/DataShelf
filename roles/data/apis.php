<?php

    require_once "marketplace_db.php";

    if(isset($_GET['api']) and !empty($_GET['api']))
    {
        $api_name = $_GET['api'];
       
       if(isset($_GET['filter']))
       {
        $filter = $_GET['filter'];  
       }
       
        if(isset($_GET['term']))
        {
            $term = $_GET['term'];

        }

        if($api_name == 'mpds')
        {
            if($filter =='mine')
            {
                $result = get_mp_mine_datasets_V2();
                $rows = array();
                while($r = mysqli_fetch_assoc($result)) 
                {
                    $rows[] = $r;
                }
    
                header('Content-type: text/javascript');
                echo json_encode($rows,JSON_PRETTY_PRINT);
            }
            else if($filter=='all')
            {
                $result = get_mp_all_datasets_V2();
                $rows = array();
                while($r = mysqli_fetch_assoc($result)) 
                {
                    $rows[] = $r;
                }
    
                header('Content-type: text/javascript');
                echo json_encode($rows,JSON_PRETTY_PRINT);
            }
           else  if($filter=='featured')
            {
                $result = get_mp_featured_datasets_V2();
                $rows = array();
                while($r = mysqli_fetch_assoc($result)) 
                {
                    $rows[] = $r;
                }
    
                header('Content-type: text/javascript');
                echo json_encode($rows,JSON_PRETTY_PRINT);
            }
           
        }
        else if($api_name =='cptds')
        {
            echo "";
        }
        else if($api_name == 'logged')
        {

            if(isset($_SESSION['is_logged_in']))
            {
                echo "{ status: true }";
            }
            else{
                echo "{ status: false }";
            }
        }

       

    }

    
    
    else
    {
        header('Content-type: text/javascript');
        echo json_encode(array('error'=>'invalid request'));
    }

?>