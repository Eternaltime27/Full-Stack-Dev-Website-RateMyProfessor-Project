<?php
include 'member_OD41212.php';
// Show MyGuests Data

require 'dbcon_OD41212.php';

// define variables and set to empty values
$id = "";

$id = $_GET['pid'];
$sql = "Delete FROM tblrating_OD41212 Where rid=$id";

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: displayratings_OD41212.php');

?>