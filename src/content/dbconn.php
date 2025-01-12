<?php
    //Connect to the database
    session_start(); // This starts a session as soon as the website starts
    function getConnection()
    {
        $servername = "localhost"; // This is the name of the webserver
        $username = "root"; // This is the username of my account on phpmyadmin
        $password = ""; // This is the password to phpmyadmin account
        $dbname = "kf7013"; // This is the name of my database on phpmyadmin
        $conn = mysqli_connect($servername, $username, $password, $dbname) // Using these details above, I connect to the database using the mysqli_connect function.
        or die("Connection failed: " . mysqli_connect_error()); // If the connection to the database fails probably because of wrong details, it would terminate this script and display errors.
//        echo "Connected successfully";
        return $conn;
    }