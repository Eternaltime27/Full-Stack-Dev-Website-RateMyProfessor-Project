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
	background-color: #393939;
	color: white;
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
				<button class="dropbtn"><A href=admin_OD41212/inde_OD41212.html ><B> Login </B></A></button>
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
				<?php

				$id = "";
				$id = $_GET['search'];

				$sql = "SELECT pid, pname, pcourse, puniversity from tblprofessor_OD41212 where pname like '%".$id."%' or pcourse like '%".$id."%'  or puniversity like '%".$id."%'";
				//echo $sql;
				// SELECT * FROM table1 LEFT JOIN table2 ON table1.id=table2.id;
				$result = $conn->query($sql);

					while($row = $result->fetch_assoc()) 
					{
					
					echo 	"
							
								<div class=hero-backgroundcolor>
									<p> ".$row["pid"]." - <a href=dprofessor_OD41212.php?pid=".$row["pid"].">".$row["pname"]."</a> - ".$row["pcourse"]." - ".$row["puniversity"].":&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
									<a href=rprofessor_OD41212.php?pid=".$row["pid"].">Rate Professor</a><br><br></p><Hr>
								</div>
							";
						
					}
					
				$conn->close();

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