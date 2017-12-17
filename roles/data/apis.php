<?php

    require "marketplace_db.php";

    if(isset($_GET['api']) and !empty($_GET['api']))
    {
        $api_name = $_GET['api'];

        if($api_name == 'mpds')
        {
            $result = get_mp_datasets();
            $rows = array();
            while($r = mysqli_fetch_assoc($result)) 
            {
                $rows[] = $r;
            }

            header('Content-type: text/javascript');
            echo json_encode($rows,JSON_PRETTY_PRINT);
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