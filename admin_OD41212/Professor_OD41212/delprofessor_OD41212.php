<?php
include 'member_OD41212.php';
// Show MyGuests Data

require 'dbcon_OD41212.php';

// define variables and set to empty values
$id = "";

$id = $_GET['pid'];
$sql = "Delete FROM tblprofessor_OD41212 Where pid=$id";

//echo $sql;

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: displayprofessor_OD41212.php');

?>