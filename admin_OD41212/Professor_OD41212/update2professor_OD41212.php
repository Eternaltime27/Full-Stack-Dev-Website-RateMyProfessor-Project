<?php
include 'member_OD41212.php';
// Show MyGuests Data

require 'dbcon_OD41212.php';

// define variables and set to empty values
$id = "";
$id = $_POST['pid'];

$pprofessor = $_POST['professor'];
$pemail = $_POST['email'];
$puniversity = $_POST['university'];
$pcourse = $_POST['course'];

$sql = "Update tblprofessor_OD41212 
Set pname = '$pprofessor',
pemail = '$pemail',
pcourse = '$pcourse',
puniversity = '$puniversity'
Where pid= $id";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo $sql;

$conn->close();


//echo "Data Deleted"
header('Location: displayprofessor_OD41212.php');
