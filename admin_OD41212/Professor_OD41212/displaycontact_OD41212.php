<head><title> Display Data </title> 
<link rel=stylesheet href=css_OD41212/style_OD41212.css> 
</head>

<?php
include 'member_OD41212.php';
require 'dbcon_OD41212.php';

$sql = "SELECT cid, cname, ccountry, csubject, ccomments
FROM  tblcontactus_OD41212";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
Contact_us         ---     <A Href=/~andylo1/FinalProject_Rate_Professor/admin_OD41212/page1_OD41212.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from Contact_us table</h2> <Br>";

echo "<Table border=0 width=80%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> Contact_ID </TD><TD> Full_Name </TD><TD> Date - Country </TD> <TD> Subject </TD> <TD> Message </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["cid"];
		echo "</TD>";
		echo "<TD>";
        echo $row["cname"];
		echo "</TD>";
		echo "<TD>";
        echo $row["ccountry"];
		echo "</TD>";
		echo "<TD>";
		echo $row["csubject"];
		echo "</TD>";
		echo "<TD>";
		echo $row["ccomments"] ;
		echo "</TD>";
		echo "<TD>";
		echo "<A href=delcontact_OD41212.php?cid=$row[cid]> <img src=image_OD41212/delete_OD41212.gif width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
		echo "</TD>";
		echo "</TR>";
    }
} else {
    echo "0 results";
}


echo "</Table>";
echo "</Center>";

$conn->close();



?>
