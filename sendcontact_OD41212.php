<?php
include 'member_OD41212.php';
// Show MyGuests Data

require 'dbcon_OD41212.php';

// define variables and set to empty values
$catname = "";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$message = $_POST['message'];

  $sql = "INSERT INTO tblcontactus_OD41212 (cname, ccountry, csubject, ccomments) 
  VALUES 
  ('$firstname', '$country', '$subject', '$message' )";
  
  //echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: contactus_OD41212.php');
?>