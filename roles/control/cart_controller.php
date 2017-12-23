<?php
    
    require_once "../data/cart_db.php";
   if(isset($_POST['mds_id']) and isset($_POST['action']))
   {
       $status['status'] = '';
       if($_POST['action'] == 'add')
       {
           if(add_to_cart_V2($_POST['mds_id']))
           {
               $status['status'] = "Added to Cart";
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
                $status['status'] = "This dataset is no longer in your cart";
                echo json_encode($status); 
                die();               
            }
        }       
   }
   else
   {
       echo "Invalid Request Parameter";
   }

?>