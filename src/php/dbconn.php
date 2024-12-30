<?php
    //Connect to the database
    function getConnection()
    {
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "kf7013";
        $conn = mysqli_connect($servername, $username, $password, $dbname)
        or die("Connection failed: " . mysqli_connect_error());
//        echo "Connected successfully";
        return $conn;
    }