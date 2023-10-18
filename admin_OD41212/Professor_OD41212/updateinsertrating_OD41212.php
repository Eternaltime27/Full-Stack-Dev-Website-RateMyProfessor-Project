<?php
include 'member_OD41212.php';
// Show MyGuests Data

require 'dbcon_OD41212.php';

// define variables and set to empty values
$id = $cc = "";

$id = $_POST['pid'];
$cc = $_POST['comment'];


  $sql = "update tblrating_OD41212 set rcomments='$cc' where rid=$id;";
  //echo $sql;
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
$conn->close();

header('Location: displayratings_OD41212.php');
?>