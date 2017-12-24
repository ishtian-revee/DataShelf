<?php
   // session_start();
    require_once "../data/purchase_db.php";
    if(isset($_SESSION['username']))
    {
       
        if(add_to_purchased())
        {
            header("location:../presentation/userprofile_bought_items.php");
        }
        else
        {
            echo "<h1 align='center'style='color:red;'>Purchase Failed !</h1>";
            echo "<hr>";
            echo "<h3 align='center'>Redirecting to Cart</h3>";
            header('Refresh: 5; URL=../presentation/user/cart.php');
        }
    }
    
?>