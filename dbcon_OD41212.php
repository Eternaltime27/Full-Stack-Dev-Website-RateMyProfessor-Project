<?php
// Connection
// File Name is dbcon.php

$servername = "studentdb-maria.gl.umbc.edu";
$username = "andylo1";
$password = "andylo1";
$dbname = "andylo1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>