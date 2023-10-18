<html>
<head>
	<title> Rate MyProfessor - Template </title>
	<link rel="stylesheet" href="style_OD41212/style_OD41212.css">
	<link rel="stylesheet" href="style_OD41212/stylemenu_OD41212.css">

</head>

<body>

<style>
.hero-image {
  background-image: url("bg_OD41212.png");
  background-color: #cccccc;
  height: 100px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-backgroundcolor{
	background-color: #FFFFFF;
	color: black;
}
</style>
</head>
<body>


<?php
require 'admin_OD41212/dbcon_OD41212.php';

?>

	<header class="banner">
	<img src="images_OD41212/bglogo_OD41212.svg">  

		<div class="panel panel-nav">
			<center>
				<div class="dropdown">
				<button class="dropbtn"><A href=homepage_OD41212.php ><B> HOME </B></A></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><A href=/~andylo1/FinalProject_Rate_Professor/admin_OD41212/inde_OD41212.html ><B> Login </B></A></button>
				</div>
				<div class="dropdown">
				<button class="dropbtn"><A href=contactus_OD41212.php ><B> ContactUs </B></A></button>
				</div>
			</center>
		</div>
	
	</header>
	
	<main>
<?php

				

?>	
				
				<article>
				<Center>
				<div class="hero-image">
					<div class="hero-text">
					<image src=images_OD41212/bglogo_OD41212.svg />
					<p>Professors</p>
					<div>

				</div>	
				</div>
				</div>
	
				
				<Center>
				<div class="hero-backgroundcolor"><br>
				<Table border=0 width=90%>
				<?php

				$id = "";
				$id = $_GET['pid'];

				$sql = "SELECT pid, pname, pcourse, puniversity,p_fk, rdate, rrating, rdifficulty, rtag,   ragain, rcomments from tblprofessor_OD41212 JOIN tblrating_OD41212 ON tblprofessor_OD41212.pid = tblrating_OD41212.p_fk Where tblrating_OD41212.p_fk=$id order by rid desc";
				//echo $sql;
				
				$result1 = $conn->query($sql);
				$row = $result1->fetch_assoc();

if ($conn->query($sql) === FALSE) { echo "Error: " . $sql . "<br>" . $conn->error; }
$count=$result1->num_rows;
if($count>=1){ 


				echo "<Tr><Td Width=50%>";
					echo "
						<div class=hero-backgroundcolor>
							<H1> ".$row["pname"]." - ".$row["pcourse"]." - ".$row["puniversity"]."</H2>									
						</div>
						";
				$pname = $row["pname"];
				$result2 = $conn->query($sql);
				$nrate = 0;
				$ndifficulty = 0;
				$num_rows = 5;
				$num_rows = $result2->num_rows;;
					while($row = $result2->fetch_assoc()) 
					{
					$nrate = $nrate + $row["rrating"];
					$ndifficulty = $ndifficulty + $row["rdifficulty"];
					}				

				echo "<Div><H1 class=lableRating>". round($nrate / $num_rows,1) ."</H1><p class=lable5>/ 5 </p><p>Overall Quality Based on: ". $num_rows ." ratings</p>
				<Div class=rateP> <a href=rprofessor_OD41212.php?pid=$id>Rate Professor ".$pname." </a> <Div>
				</Div></Td>
				<Td>";
				include ("chartratingD_OD41212.php");
				echo "</Td>
				</Tr>";
				echo "";
				echo "<Tr><Td><br><H3 class=lableDificulty>Dificulity: ". round($ndifficulty / $num_rows,1) ."</H3>";	
				echo "</Td><Td>  </Td>";
				echo "</Table>";
				$result = $conn->query($sql);
				echo "<Table border=0>";
					while($row = $result->fetch_assoc()) 
					{
						if ($row["rrating"]==4 || $row["rrating"]==5 )
						{
							$imgr = "images_OD41212/awe_OD41212.png";
						}
						if ($row["rrating"]==3 || $row["rrating"]==2)
						{
							$imgr = "images_OD41212/ok_OD41212.png";
						}
						if ($row["rrating"]==1)
						{
							$imgr = "images_OD41212/awf_OD41212.png";
						}
					echo "<div class=hero-backgroundcolor>
							<Tr><Td width=20%><P>QUALITY<BR><b class=lableRatingSmall>".$row["rrating"]."</b></P></Td><Td width=60%><b>".$row["pcourse"]." <img src=$imgr /></b></Td><Td Width=20%> Posted on: ".$row["rdate"]."</Td></Tr>
							<Tr><Td width=20%><p>DIFFICULTY<BR><b class=lableRatingSmall>".$row["rdifficulty"]."</b></p></Td><Td width=60%>".$row["rtag"]."</Td><Td Width=20%></Td></Tr>
							<Tr><Td width=20%></Td><Td width=60%>".$row["rcomments"]."</Td><Td Width=20%></Td></Tr>
							<Tr><Td colspan=3><Hr></Td></Tr>
						</div>
					<Br>";
					}
				echo "</Table>";	
				$conn->close();

		}
		Else { 	echo "<H1> No Rating Found for the Professor </H1>";  }

?>
	</div>
	</Center>
	</article>			
	</main>
	
	<footer>
		<center>
			Footer information
		</center>
	</footer>
</body>
</html>