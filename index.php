
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Insert Owner Data</title>
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
	<a class="selected links" href="https://turing.cs.olemiss.edu/~fwroush/planner.php">Pet Planner</a>
	</nav>
	<?php
	// Initialize the session
	session_start();

	// Check if the user is logged in, if not then redirect him to login page
	if($_SESSION["loggedin"] !== true){
			header("location: petHome.php");
			exit;
	}

	?>
	<center>
		<h1>Creating New Owner</h1>

		<form action="insertOwner.php" method="post">

<div class="wrapper">
<div class="form-group">
					<label for="Email">Email Address:</label>
					<input type="text" name="Email" class="form-control" id="Email">
			</div>

<div class="form-group">
				<label for="Name">Name:</label>
				<input type="text" name="Name" class="form-control" id="Name">
			</div>

<div class="form-group">
				<label for="Address">Address:</label>
				<input type="text" name="Address" class="form-control" id="Address">
			</div>

<div class="form-group">
				<label for="Phone">Phone:</label>
				<input type="text" name="Phone" class="form-control" id="Phone">
			</div></div>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
