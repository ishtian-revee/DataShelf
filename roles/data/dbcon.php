<?php

//Local MySQL Server
define("SERVERNAME", "localhost", true);
define("USERNAME", "root", true);
define("PASSWORD", "", true);
define("DBNAME","dshelf",true);

// //Remote MySQL Server
// define("SERVERNAME", "db4free.net:3307", true);
// define("USERNAME", "dshelf", true);
// define("PASSWORD", "dshelf1234", true);
// define("DBNAME","dshelf",true);





    function execute_query($sql)
    {

       // global $conn;
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "dshelf";
       $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME) or die("<h1 align='center'>503 Service Unavailable<h1><hr>");

       $result = mysqli_query($conn,$sql);
       mysqli_close($conn);

       return $result;
    }

    function execute_query_V2($sql)
    {

       // global $conn;
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "datashelf";
        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME) or die("<h1 align='center'>503 Service Unavailable<h1><hr>");

        $result = mysqli_query($conn,$sql);
        $rows = mysqli_affected_rows($conn);
        mysqli_close($conn);

        return $rows;
    }

?>
