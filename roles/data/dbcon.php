<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "datashelf";
$servername = "db4free.net:3307";
$username = "dshelf";
$password = "dshelf1234";
$dbname = "dshelf";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    function destroy_connection()
    {
        global $conn;
        mysqli_close($conn);
    }

    function execute_query($sql)
    {   
        global $conn;
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }

?>