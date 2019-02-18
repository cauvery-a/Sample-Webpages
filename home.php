<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="home_style.css">
	<title>Home</title>
</head>
<body>

	<?php
	include("nav.php");
	?>

	<div class="container">
		<div class="slider">

			<!-- Slide 1 -->
			<div class="slide slide1">
				<div class="caption">
					<h2>Our Website</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

			<!-- Slide 2 -->
			<div class="slide slide2">
				<div class="caption">
					<h2>Why our Website?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<button class="button-style">Register</button>
				</div>
			</div>

			<!-- Slide 3 -->
			<div class="slide slide3">
				<div class="caption">
					<h2>Slide 3</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<button onclick="document.getElementById('modal-wrapper').style.display='block'" class="button-style">Login as Student</button>

					<div id="modal-wrapper" class="modal">

						<form class="modal-content animate" action="#">

							<div class="close-box">
							<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>

							<h1>Login</h1>
							</div>

							<div class="login-container">
								<input type="text" placeholder="Enter Username" name="username">
								<input type="password" placeholder="Enter Password" name="password">
								<button class="login-button" type="submit">Login</button>
								<input type="checkbox" class="check-style">Remember Me
								<a href=#>Forgot Password?</a>
							</div>
						</form>
					</div>

					<script type="text/javascript">
						var modal=document.getElementById('modal-wrapper');
						window.onclick=function(event) {
							if(event.target == modal) {
								modal.style.display="none";
							}
						}
					</script>

				</div>
			</div>

			<!-- Slide 4 -->
			<div class="slide slide4">
				<div class="caption">
					<h2>Slide 4</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<button onclick="document.getElementById('modal-wrapper').style.display='block'" class="button-style">Login as Other</button>

					<div id="modal-wrapper" class="modal">

						<form class="modal-content animate" action="#">

							<div class="close-box">
							<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>

							<h1>Login</h1>
							</div>

							<div class="login-container">
								<input type="text" placeholder="Enter Username" name="username">
								<input type="password" placeholder="Enter Password" name="password">
								<button class="login-button" type="submit">Login</button>
								<input type="checkbox" class="check-style">Remember Me
								<a href=#>Forgot Password?</a>
							</div>
						</form>
					</div>

					<script type="text/javascript">
						var modal=document.getElementById('modal-wrapper');
						window.onclick=function(event) {
							if(event.target == modal) {
								modal.style.display="none";
							}
						}
					</script>

				</div>
			</div>
			
			<!-- Slide 1 -->
			<div class="slide slide1">
				<div class="caption">
					<h2>Our Website</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

		</div>
	</div>

	
</body>
</html>