<!DOCTYPE html>
<html>

<head>
	<title>List Activities</title>
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
	<center>
		<nav>
		<a class="selected links" href="https://turing.cs.olemiss.edu/~fwroush/planner.php">Pet Planner</a>
		</nav>
		<?php
		$mysqli = new mysqli("localhost","fwroush","olemiss2021","fwroush");
		// Check connection
		if ($mysqli->connect_errno) {
		 echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		 exit();
		}
		// Taking all 5 values from the form data(input)
		$email = $_POST['Email'];
		// Performing insert query execution
		$sql = "SELECT Name FROM Pets WHERE Email='$email'";
			//echo $sql;
    $result = mysqli_query($mysqli,$sql);
    //echo $result;
    $count = $result->num_rows;
    echo "Results = $count Pets";
		if ($result->num_rows > 0) {
      //while ($row = mysqli_fetch_row($result)) {
      //  echo $row[0];
      //}
    }
    else {
      echo 'no record found';
    }


		// Close connection
		$mysqli -> close();
		?>
    <form action="showActivities.php" method="POST">

  		<label>Select a Pet</label>
  		<select name="Category">
  			<?php

        // Connect to database
    $con = new mysqli("localhost","fwroush","olemiss2021","fwroush");


    // Get all the categories from category table
    $sql = "SELECT * FROM Pets WHERE Email='$email'";
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
  		</select>
  		<br>
  		<input type="submit" value="submit" name="submit">
  	</form>
  	<br>
	</center>
</body>

</html>
