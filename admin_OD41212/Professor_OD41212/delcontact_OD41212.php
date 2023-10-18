<?php
include 'member_OD41212.php';
// Show MyGuests Data

require 'dbcon_OD41212.php';

// define variables and set to empty values
$id = "";

$id = $_GET['cid'];
$sql = "Delete FROM tblcontactus_OD41212 Where cid=$id";

//echo $sql;

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: displaycontact_OD41212.php');

?>