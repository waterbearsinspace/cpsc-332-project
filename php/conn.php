<?php
    $DB_SERVER = "localhost";
    $DB_USER = "root";
    $DB_PASSWORD = "";
    // $DB_DATABASE = ""; 

    $conn = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD);
    // $conn = new mysqli($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_DATABASE);

    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>