<?php
    //function connect database
    function my_connectDB(){
    $host = "localhost";
    $user = "root";
    $pwd = "";
    $db = "papajoewebsite";

    $conn = mysqli_connect($host, $user, $pwd, $db) or die("Error connecting to Database");

    return $conn;
    }

    //function untuk close database
    function my_closeDB($conn){
    mysqli_close($conn);
    }

?>
