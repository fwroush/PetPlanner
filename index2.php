<!DOCTYPE html>
<html lang="en">

<head>
	<title>Insert Pet Data</title>
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
		<h1 >Creating a New Pet</h1>

		<form action="insertPet.php" method="post">




<div class="wrapper">
<div class="form-group">
				<label for="Name">Name:</label>
				<input type="text" name="Name" class="form-control" id="Name">
			</div>


<div class="form-group">
					<label for="Email">Owner Email Address:</label>
					<input type="text" name="Email" class="form-control" id="Email">
			</div>


<div class="form-group">
				<label for="Species">Species:</label>
				<select name="Species" class="form-control">
					<option value="">Select...</option>
					<option value="Canine">Canine</option>
					<option value="Feline">Feline</option>
					<option value="Other">Other Species</option>
				</select>
			</div>

<div class="form-group">
				<label for="Birth">Birth:</label>
				<input type="date" name="Birth" class="form-control" id="Birth">
			</div>

<div class="form-group">
				<label for="Chip">Chip:</label>
				<input type="text" name="Chip" class="form-control" id="Chip">
			</div>
<div class="form-group">
				<label for="Gender">Gender:</label>
				<select name="Gender" class="form-control">
  			<option value="">Select...</option>
  			<option value="M">Male</option>
  			<option value="F">Female</option>
				<option value="NeutM">Neutered Male</option>
  			<option value="SpayF">Spayed Female</option>
				</select>
			</div>
<div class="form-group">
				<label for="Description">Description:</label>
				<input type="text" name="Description" class="form-control" id="Description">
			</div></div>
			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
