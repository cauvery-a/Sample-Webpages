<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="profile_style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<?php
		include("nav.php");
	?>

	<!-- This is the div consisting of a grid -->
	<div class="flex-container">

		<div class="flex-columns">
			<div class="personal">
				<div class="img-txt">
					<img src="https://www.wallpaperup.com/uploads/wallpapers/2015/12/22/866247/82cbad376d1a97b88b9dca2220225513.jpg" />
					<div class="bottom-left">John Doe</div>
				</div><br>
				<div class="personal-details">

					<i style="font-size:20px; color:#333;" class="fa fa-envelope"></i>&nbsp&nbsp johndoe@gmail.com<br><br>
					<i style="font-size:20px; color:#333;" class="fa fa-phone"></i>&nbsp&nbsp 1234567890<br><br>
					<i style="font-size:20px; color:#333;" class="fa fa-birthday-cake"></i>&nbsp&nbsp 25th Dec 1995<br><br>
					<i style="font-size:20px; color:#333;" class="fa fa-home"></i>&nbsp&nbsp Karnataka, India<br><br>
					<hr>

					<i style="font-size:24px; color:#333;" class="fa">&#xf001;</i>&nbsp&nbsp <span class="headings">Hobbies/Interests</span><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Drawing, Swimming, Art
				</div>
			</div>

			<div class="language">
				<i style="font-size:24px; color:#333;margin-left: 10px;" class="fa fa-language"></i>&nbsp&nbsp <span class="headings">Languages</span><br><br>

				<span style="margin-left: 10px;">English</span><br>
				<div id="perc-bar">
  					<div style="width: 90%;">90%</div>
				</div><br>

				<span style="margin-left: 10px;">Kannada</span><br>
				<div id="perc-bar">
  					<div style="width: 70%;">70%</div>
				</div><br>

				<span style="margin-left: 10px;">Hindi</span><br>
				<div id="perc-bar">
  					<div style="width: 50%;">50%</div>
				</div><br>

			</div>

		</div>

		<div class="flex-columns">
			<div class="project">
				<i style="font-size:24px; color:#333;margin-left: 10px;" class="fa fa-star"></i>&nbsp&nbsp <span class="headings">Projects/Achievements</span><br><br>
			</div>

			<div class="education">
				<i style="font-size:24px; color:#333;margin-left: 10px;" class="fa fa-graduation-cap"></i>&nbsp&nbsp <span class="headings">Education</span><br><br>
			</div>
		</div>

		<div class="flex-columns">
			<div class="skills">
				<i style="font-size:24px; color:#333;margin-left: 10px;" class="fa fa-trophy"></i>&nbsp&nbsp <span class="headings">Professional Skills</span><br><br>

				<span style="margin-left: 10px;">HTML</span><br>
				<div id="perc-bar">
  					<div style="width: 80%;">80%</div>
				</div><br>

				<span style="margin-left: 10px;">CSS</span><br>
				<div id="perc-bar">
  					<div style="width: 70%;">70%</div>
				</div><br>

				<span style="margin-left: 10px;">JavaScript</span><br>
				<div id="perc-bar">
  					<div style="width: 10%;">10%</div>
				</div><br>

				<span style="margin-left: 10px;">PHP</span><br>
				<div id="perc-bar">
  					<div style="width: 20%;">20%</div>
				</div><br>

			</div>
		</div>


	</div>
</body>
</html>
