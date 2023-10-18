<?php
require 'dbcon_OD41212.php';

// define variables and set to empty values
$pid = $_GET['pid'];
$rate = $_GET['rate'];
$dificulty = $_GET['dificulty'];
$radio = $_GET['radio'];
$comment = $_GET['comment'];
$date = date("Y-m-d h:i:sa"); 

 $aDoor = $_GET['chk'];
  if(empty($aDoor)) 
  {
    echo("You didn't select any tags.");
  } 
  else 
  {
    $N = count($aDoor);
    $strtag = "";
    echo("You selected $N Tag(s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
	 $strtag = $strtag .  $aDoor[$i] ."   :   ";
    }
  }


echo "<H1> $strtag </H1>";

  $sql = "INSERT INTO tblrating_OD41212 (p_fk, rdate, rrating, rdifficulty, rtag, ragain, rcomments) 
  VALUES 
  ('$pid', '$date', '$rate', '$dificulty', '$strtag', '$radio', '$comment' )";
  
  echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: dprofessor_OD41212.php?pid=$pid");
?>