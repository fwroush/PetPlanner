<!DOCTYPE html>
<html lang="en">

<head>
	<title>Insert Boarding Data</title>
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
		<h1>Insert Boarding Reservation</h1>

		<form action="insertBoarding.php" method="post">
<div class="wrapper">

<div class="form-group">
	<label for="PetID">Select a Pet</label>
	<select name="PetID">
		<?php

		// Connect to database
	$con = new mysqli("localhost","fwroush","olemiss2021","fwroush");


	// Get all the categories from category table
	$sql = "SELECT * FROM Pets ";
	$all_categories = mysqli_query($con,$sql);
			// use a while loop to fetch data
			// from the $all_categories variable
			// and individually display as an option
			while ($category = mysqli_fetch_array(
					$all_categories,MYSQLI_ASSOC)):;
		?>
			<option value="<?php echo $category["PetID"];
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
				<label for="StartDate">Start Date:</label>
				<input type="date" name="StartDate" class="form-control" id="StartDate">
			</div>

<div class="form-group">
				<label for="EndDate">End Date:</label>
				<input type="date" name="EndDate" class="form-control" id="EndDate">
			</div>

<div class="form-group">
				<label for="TotalDays">Total Days:</label>
				<input type="text" name="TotalDays" class="form-control" id="TotalDays">
			</div>


<div class="form-group">
				<label for="AttID">Attendant ID:</label>
				<input type="text" name="AttID" class="form-control" id="AttID">
			</div></div>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
