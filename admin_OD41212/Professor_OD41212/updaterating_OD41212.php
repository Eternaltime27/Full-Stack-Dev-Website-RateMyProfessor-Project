<?php
include 'member_OD41212.php';
require 'dbcon_OD41212.php';
$rid = $_GET['pid'];
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<Title> Rate MyProfessor </Title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style_OD41212/style1_OD41212.css">

<Script>
function updateTextInput(val) 
		{
			var strtext = "";
			if (val == 1)
			{
				strtext = "Awful";
			}
			else if (val == 2)
			{
				strtext = "Ok";
			}
			else if (val == 3)
			{
				strtext = "Good";
			}
			else if (val == 4)
			{
				strtext = "Great";
			}
			else 
			{
				strtext = "Awesome";
			}
          document.getElementById('textInput').value=val + " : " + strtext; 
        }
function updateTextInput1(val) 
		{
          	var strtext1 = "";
			if (val == 1)
			{
				strtext1 = "Very Easy";
			}
			else if (val == 2)
			{
				strtext1 = "Easy";
			}
			else if (val == 3)
			{
				strtext1 = "Average";
			}
			else if (val == 4)
			{
				strtext1 = "Dificult";
			}
			else 
			{
				strtext1 = "Very Dificult";
			}
          document.getElementById('textInput1').value=val + " : " + strtext1; 
        }


function onlyOneCheckBox() {
	var checkboxgroup = document.getElementById('checkboxgroup').getElementsByTagName("input");
	var limit = 3;
	for (var i = 0; i < checkboxgroup.length; i++) {
		checkboxgroup[i].onclick = function() {
			var checkedcount = 0;
				for (var i = 0; i < checkboxgroup.length; i++) {
				checkedcount += (checkboxgroup[i].checked) ? 1 : 0;
			}
			if (checkedcount > limit) {
				console.log("You can select maximum of " + limit + " checkbox.");
				alert("You can select maximum of " + limit + " checkbox.");
				this.checked = false;
			}
		}
	}
}
</Script>

</head>
<body onload = "welcomeFunction()" >
<Center>
<H1> Rate MyProfessor </H1>
<Form action=updateinsertrating_OD41212.php method=post enctype="multipart/form-data">
<?php
$sql = "SELECT pid, pname, pemail, pcourse, puniversity, rid, p_fk, rdate, rrating, rdifficulty, rtag,   ragain, rcomments from tblprofessor_OD41212 JOIN tblrating_OD41212 ON tblprofessor_OD41212.pid = tblrating_OD41212.p_fk where rid=$rid";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$rrating = $row["rrating"];
$rdifficulty = $row["rdifficulty"];
echo "<input type=hidden name=pid value=$rid>";
echo "<Table border=0>";
echo "<Tr>";
echo "<Td>";
echo "<H3> Professor - Course - University ";
echo "</Td>";
echo "<Td>";
		echo $row["pname"]." - ".$row["pcourse"]." - ".$row["puniversity"];
echo "</Td><Tr><Td>";
echo "<H3> Rate your professor*";
echo "</Td><Td>";
echo " 	<input type=range min=1 max=5 value=$rrating class=slider name=rate onchange=updateTextInput(this.value); > <input type=text size=11 id=textInput disabled value='1 : Awful'>	<Br>";
echo "</Td><Tr><Td>";
echo "<H3> Difficulty Level*";
echo "</Td><Td>";
echo " 	<input type=range min=1 max=5 value=$rdifficulty class=slider name=dificulty onchange=updateTextInput1(this.value);> <input type=text id=textInput1 disabled value='1 : Very Easy'>	<Br>";
echo "</Td><Tr><Td>";
echo "<H3> Would you take this professor again?* ";
echo "</Td><Td>".$row["ragain"]."";
//echo "  <Br>";
echo "</Td><Tr><Td>";
echo "<H3> Select up to 3 tags ";
echo "</Td><Td>".$row["rtag"]. " <Br>";
echo "<script type=text/javascript>
	onlyOneCheckBox()
</script>";
echo "</Td><Tr><Td>";
echo "<H3> Comments ";
echo "</Td><Td>";
echo "<Textarea cols=50 rows=7 name=comment>".$row["rcomments"]. "</textarea> <Br> <Br>";
echo "</Td><Tr><Td>";
echo "<Center><Table border=0 width=70%><Tr><Td valign=top colspan=2>";
echo "<Input type=submit value=Update_Raiting_Comments>  </Form>";
echo "</Td><Td valign=top>";
echo "<form action=displayrating_OD41212.php><Input type=submit value=Cancel></form>";
echo "</Td></Tr></Table></Center>";
echo "</Td></Tr></Table>";
echo "</Center>";



?>

   <script type="text/javascript">
      function welcomeFunction() {
      updateTextInput(<?php echo $rrating; ?>);
	  updateTextInput1(<?php echo $rdifficulty; ?>)
	  }
   </script>
   </Body>
   </HTML>
   