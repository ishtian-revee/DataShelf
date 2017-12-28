<?php
        require_once "cart_db.php";
   if(isset($_POST['mds_id']) and isset($_POST['action']))
   {
       $status['status'] = '';
       if($_POST['action'] == 'add')
       {
           if(add_to_cart_V2($_POST['mds_id']))
           {
               $status['status'] = "Added to Cart !";
               echo json_encode($status);
               die();
           }
           else
           {
                $status['status'] = "This dataset is already in your cart !";
                echo json_encode($status);
                die();
           }
       }
       else  if($_POST['action'] == 'remove')
        {
            if(remove_from_cart_V2($_POST['mds_id']))
            {
                $status['status'] = "Removed from cart !";
                echo json_encode($status);
                die();
            }
            else
            {
                $status['status'] = "This dataset is no longer in your cart !";
                echo json_encode($status); 
                die();               
            }
        }       
   }
   else if(isset($_GET['action']))
   {
        $action = $_GET['action'];
        if($action=='loadcart')
        {
            if(isset($_SESSION['username']))
            {
                $username = $_SESSION['username'];
                $sql = "SELECT * from cart_view where username = '$username'";
                $result = execute_query($sql);
                $rows = array();
                while($r = mysqli_fetch_assoc($result)) 
                {
                    array_push($rows,$r);
                }

                header('Content-type: text/javascript');
                echo json_encode($rows,JSON_PRETTY_PRINT);
            }
            else
            {
                echo "Unauthorized";
            }
        }
        if($action == 'cart_total')
        {
            $username = $_SESSION['username'];
            $sql = "SELECT round(SUM(price),2) as total from cart_view WHERE username='$username'";
            $result = execute_query($sql);
            $rows = array();
            while($r = mysqli_fetch_assoc($result)) 
            {
                array_push($rows,$r);
            }

            header('Content-type: text/javascript');
            echo json_encode($rows,JSON_PRETTY_PRINT);
            
        }
        
   }
   else
   {
       echo "Invalid Request Parameter";
   }

?>