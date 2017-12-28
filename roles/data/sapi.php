<?php
require_once "marketplace_db.php";
if(isset($_GET['api']) and isset($_GET['term']))
{

    $api_name = $_GET['api'];
    $term = $_GET['term'];

if($api_name == 'sm')
{
   
        $result = search_by_anything_mine($term);
        $rows = array();
        while($r = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $r;
        }

        header('Content-type: text/javascript');
        echo json_encode($rows,JSON_PRETTY_PRINT);
}
else if($api_name == 'sa')
{
   
    $result = search_by_anything_all($term);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) 
    {
        $rows[] = $r;
    }

    header('Content-type: text/javascript');
    echo json_encode($rows,JSON_PRETTY_PRINT);
}
else if($api_name=='sf')
{
    $result = search_by_anything_featured($term);
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) 
    {
        $rows[] = $r;
    }

    header('Content-type: text/javascript');
    echo json_encode($rows,JSON_PRETTY_PRINT);
}

}

?>