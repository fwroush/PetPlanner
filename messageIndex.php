<!DOCTYPE html>
<html lang="en">

<head>
	<title>Insert Activity Data</title>
	<link href="paw.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
	body{
		background-color:#cdcfd4;
	}
	* {box-sizing: border-box;}
	nav {
	 overflow: hidden;
	 background-color: #330b7c;
	 padding: 10px;
	}
	.links {
	 font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	 font-weight: bold;
	 float: left;
	 color:white;
	 text-align: center;
	 padding: 12px;
	 text-decoration: none;
	 font-size: 18px;
	 line-height: 25px;
	 border-radius: 4px;
	}
	nav .logo {
	 font-size: 25px;
	 font-weight: bold;
	}
	nav .links:hover {
	 background-color: rgb(214, 238, 77);
	 color: rgb(42, 10, 94);
	}
	nav .selected {
	 background-color: dodgerblue;
	 color: white;
	}
	.rightSection {
	 float: right;
	}
	.links:hover{
	background-color: rgb(214, 238, 77);
	color: rgb(42, 10, 94);
	}
	.wrapper{width: 360px; padding: 20px;}
	@media screen and (max-width: 870px) {
	 nav .links {
			float: none;
			display: block;
			text-align: left;
	 }
	 .rightSection {
			float: none;
	 }
	}
	</style>
</head>

<body>
	<nav>
	<a class="selected links" href="https://turing.cs.olemiss.edu/~fwroush/welcome.php">Pet Planner</a>
	</nav>
	<?php
	// Initialize the session
	session_start();


	// Check if the user is already logged in, if yes then redirect him to welcome page
	if(!(isset($_SESSION["clientloggedin"]) && $_SESSION["clientloggedin"] === true)){
	    header("location: petHome.php");
	    exit;
	}

	?>
	<center>
		<h1>Send a Message</h1>

		<form action="custMessage.php" method="post">

<div class="wrapper">



	<div class="form-group">
						<label for="Email">Owner Email Address:</label>
						<input type="text" name="Email" class="form-control" id="Email">
				</div>



			<div class="form-group">
							<label for="AtFacility">Is your pet currently at our facility?</label>
							<select name="AtFacility" class="form-control">
								<option value="Yes Boarding or Bath">Yes, Boarding or Bath</option>
								<option value="Yes in Hospital">Yes, in Hospital</option>
								<option value="Not Currently">Not Currently</option>
							</select>
						</div>


<div class="form-group">
				<label for="Description">Message (Please include pet's name):</label>
				<input type="text" name="Description" class="form-control" id="Description">
			</div></div>


			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
