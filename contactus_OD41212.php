
<html>
<head>
	<title> Rate MyProfessor - ContactUs </title>
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

		
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 100%
 

		H1{ color:#ec98a0;}
H2{ color:#c41c1c;}
H3{ color:#199ef0;}
a:link{ color:#181c17;}
a:visited { color:#ec09bb;}
a:hover{ color:#009dff;}
a:active{ color:#e7f702;}
.lableRating{ color:#dd9797;}
.lable5{ color:#080808;}
.lableDificulty{ color:#c0dfed;}
.rateP{ color:#19d1f5;}
.lableRatingSmall{ color:#ff0a0a;}

</style>
</head>
<body>



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

			<section>	
				<article>
				<div class="container">
				
					<h2>Contact Form</h2>
					<br>
					<p> Andy Lo </p>
					<p> IS448 Final Project  </p>
					<p> Email: andylo1@umbc.edu </p>
					<p> Contact: 301-531-0119 </p><br>
				</div>
				</article>
			<article>

				<div class="container">
				  <form action="sendcontact_OD41212.php">
					<label for="fname">First Name</label>
					<input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>

					<label for="country">Country</label>
					<select id="country" name="country">
					  <option value="canada">Canada</option>
					  <option value="usa">USA</option>
					</select><br>

					<label for="subject">Subject</label>
					<input type="text" id="Subject" name="Subject" placeholder="Subject.."><br>
					
					<label for="Message">Message</label>
					<textarea id="message" name="message" placeholder="Write you message.." style="height:200px"></textarea><br>

					<input type="submit" value="Submit">
				  </form>
				</div>
			</article>
			</section>
	</main>
	

				

?>
	
	<footer>
		<center>
			Footer information
		</center>
	</footer>
</body>
</html>