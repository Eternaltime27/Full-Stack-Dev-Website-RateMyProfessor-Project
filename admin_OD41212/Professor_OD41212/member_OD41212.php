<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
    echo "<H3>Welcome to the member's area, User Name: " . $_SESSION['username'] . "!</H3>";
} else {
    header("Location: inde_OD41212.html");
}
?>