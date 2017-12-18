<?php

    // session_start();
    // session_destroy();
    // echo die();
    // require "dbcon.php";

    // $sql = "SELECT name from users";
    // $result  = execute_query($sql);

    // echo "<table border='1' noshade>";
    // while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
    //     echo "<tr><td>" . $row['name']."</td></tr>" ; //$row['index'] the index here is a field name
    //     }

    // echo "</table>";


    require "dbcon.php";

    $sql = "SELECT title from marketplace_datasets where mds_id=2";
    
    echo (execute_query($sql));


?>