<!DOCTYPE html>
<html lang="en">

<head>
	<title>Insert Activity Data</title>
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
		<h1>Insert an Activity</h1>

		<form action="insertActivity.php" method="post">

<div class="wrapper">



	<div class="form-group">
		<label for="BoardID">Select a Pet</label>
		<select name="BoardID">
			<?php

			// Connect to database
		$con = new mysqli("localhost","fwroush","olemiss2021","fwroush");


		// Get all the categories from category table
		$sql = "SELECT p.Name, b.BoardID FROM Pets p join Boardings b where b.PetID = p.PetID";
		$all_categories = mysqli_query($con,$sql);
				// use a while loop to fetch data
				// from the $all_categories variable
				// and individually display as an option
				while ($category = mysqli_fetch_array(
						$all_categories,MYSQLI_ASSOC)):;
			?>
				<option value="<?php echo $category["BoardID"];
					// The value we set is the primary key
				?>">
					<?php echo $category["Name"];
						// To show the category name to the user
					?>
				</option>
			<?php
				endwhile;
				// While loop must be terminated
			?>
		</select></div>

<div class="form-group">
				<label for="Occurs">Date and Time:</label>
				<input type="datetime-local" name="Occurs" class="form-control" id="Occurs">
			</div>


<div class="form-group">
				<label for="Note">Note:</label>
				<input type="text" name="Note" class="form-control" id="Note">
			</div>


			<div class="form-group">
							<label for="ActType">Activity Type:</label>
							<select name="ActType" class="form-control">
			  			<option value="">Select...</option>
			  			<option value="1">Daycare</option>
			  			<option value="2">Bath</option>
							<option value="3">Urination</option>
			  			<option value="4">Defecation</option>
							<option value="5">Feeding</option>
							<option value="6">Medication</option>
							</select>
						</div>


			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
