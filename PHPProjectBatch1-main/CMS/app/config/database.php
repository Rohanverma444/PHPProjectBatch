<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);

function getDBConnection()
{
    $host = "localhost";
    $user_name = "root";
    $password = "";
    $database = "phpcms";
    $port = 3306;
// Single line comment
    /*Single line comment*/  //Multi line comment
// echo "<pre>"; print_r($_GET);

// Create Connection
    $conn = mysqli_connect($host, $user_name, $password, $database, $port);

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    } else {
        return $conn;
        // die("Connected");
        // exit();
    }
}
?>