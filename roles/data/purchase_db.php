<?php
    require_once "dbcon.php";
    require_once "cart_db.php";

    function add_to_purchased()
    {
        
        $success = FALSE;
        $username = $_SESSION['username'];
        $items =  get_all_cart_items_as_Obj();

       while($row = mysqli_fetch_assoc($items))
       {
            $mds_id = $row['mds_id'];
            $price = $row['price'];    
            $sql = "INSERT INTO `purchases`(`username`, `mds_id`, `price`) VALUES ('$username',$mds_id,$price)";  
            if(execute_query($sql))
            {
                $sql = "DELETE FROM carts where username = '$username' and mds_id = '$mds_id'";
                if(execute_query($sql))
                {
                    $sql ="UPDATE marketplace_datasets SET downloads=downloads+1 where mds_id = '$mds_id'";
                    if(execute_query($sql))
                    {
                         $success = TRUE;
                    }
                }
            }

       } 
      return $success;
    }

    function get_daily_transection()
    {
        return true;
    }


?>