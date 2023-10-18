<?php
include 'member_OD41212.php';
// Show MyGuests Data

require 'dbcon_OD41212.php';

// define variables and set to empty values
$catname = "";

$pprofessor = $_POST['professor'];
$pemail = $_POST['email'];
$puniversity = $_POST['university'];
$pcourse = $_POST['course'];

  $sql = "INSERT INTO tblprofessor_OD41212 (pname, pemail, pcourse, puniversity) 
  VALUES 
  ('$pprofessor', '$pemail', '$pcourse', '$puniversity' )";
  
  //echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: displayprofessor_OD41212.php');
?>