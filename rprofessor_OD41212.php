<?php
require 'admin_OD41212/dbcon_OD41212.php';
$pid = $_GET['pid'];
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

<Center>
<H1> Rate MyProfessor </H1>
<Form action=insertrating_OD41212.php method=get enctype="multipart/form-data">
<?php
echo "<input type=hidden name=pid value=$pid>";
echo "<Table border=0>";
echo "<Tr>";
echo "<Td>";
echo "<H3> Course";
echo "</Td>";
echo "<Td>";
echo "<select name=course>";
$sql1 = "SELECT * from tblprofessor_OD41212 where pid=$pid";
$result1 = $conn->query($sql1);
    while($row1 = $result1->fetch_assoc()) 
	{
		echo "<option value=$row1[pid]>$row1[pcourse]</option>";
	}
	
echo "</select>";
echo "</Td><Tr><Td>";
echo "<H3> Rate your professor*";
echo "</Td><Td>";
echo " 	<input type=range min=1 max=5 value=1 class=slider name=rate onchange=updateTextInput(this.value);> <input type=text size=11 id=textInput disabled value='1 : Awful'>	<Br>";
echo "</Td><Tr><Td>";
echo "<H3> Difficulty Level*";
echo "</Td><Td>";
echo " 	<input type=range min=1 max=5 value=1 class=slider name=dificulty onchange=updateTextInput1(this.value);> <input type=text id=textInput1 disabled value='1 : Very Easy'>	<Br>";
echo "</Td><Tr><Td>";
echo "<H3> Would you take this professor again?* ";
echo "</Td><Td>";
echo "<Input type=radio name=radio value=Yes checked> Yes <Input type=radio name=radio value=No> No <Br>";
echo "</Td><Tr><Td>";
echo "<H3> Select up to 3 tags ";
echo "</Td><Td>";
$sql = "SELECT * from tblnews_OD41212 LEFT JOIN tblcategory_OD41212 ON tblnews_OD41212.newscatid = tblcategory_OD41212.catid";
$result = $conn->query($sql);

echo "
<div id=checkboxgroup>
<div>
    <label class=lns-checkbox>
    <input type=checkbox class=check name=chk[] value='Tough Grader'>
    <span>Tough_Grader</span>
  </label>
  
  <label class=lns-checkbox ml-2>
    <input type=checkbox class=check name=chk[] value='Test Heavy'>
    <span>Test_Heavy</span>
  </label>
  <label class=lns-checkbox ml-2>
    <input type=checkbox class=check  name=chk[] value='Respected'>
    <span>Respected</span>
  </label>
  <Br><Br>
  <label class=lns-checkbox ml-2>
    <input type=checkbox class=check  name=chk[] value='Amazing Lectures'>
    <span>Amazing_Lectures</span>
  </label>
  <label class=lns-checkbox ml-2>
    <input type=checkbox class=check  name=chk[] value='Lecture Heavy'>
    <span>Lecture_Heavy</span>
  </label>
   </div>
</div>   <Br>";
echo "<script type=text/javascript>
	onlyOneCheckBox()
</script>";
echo "</Td><Tr><Td>";
echo "<H3> Comments ";
echo "</Td><Td>";
echo "<Textarea cols=50 rows=7 name=comment> </textarea> <Br> <Br>";
echo "</Td><Tr><Td Colspan=2>";
echo "<H3> Write a Review* </H3> 
<p> &nbsp;&nbsp;&nbsp;Discuss the professor's professional abilities including teaching style <Br>
 and ability to convey the material clearly </p>
<H3> Guidelines </h3>
<p>
&nbsp;&nbsp;&nbsp;Your rating could be removed if you use profanity or derogatory terms. <Br>
&nbsp;&nbsp;&nbsp;Don't claim that the professor shows bias or favoritism for or against students. <Br>
&nbsp;&nbsp;&nbsp;Don’t forget to proof read!</p> <Br> <Br>";
echo "</Td><Tr><Td colspan=2>";
echo "<Center><Table border=0 width=70%><Tr><Td valign=top colspan=2>";
echo "<Input type=submit value=Submit_Raiting>  </Form>";
echo "</Td><Td valign=top>";
echo "<form action=home1.php><Input type=submit value=Cancel></form>";
echo "</Td></Tr></Table></Center>";
echo "</Td></Tr></Table>";
echo "</Center>";
echo "</HTML>";
?>