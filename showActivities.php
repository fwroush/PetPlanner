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
		$chosenPet= $_POST['Category'];
		// Performing insert query execution
		$sql = "SELECT Name,Species,Birth,Chip,Gender FROM Pets WHERE PetID='$chosenPet'";
			//echo $sql;

    if($result = $mysqli -> query($sql)){
      while ($row = mysqli_fetch_row($result)) {
				echo nl2br("Pet Name: ");
				echo $row[0];
        echo nl2br("\n");
				echo nl2br("Species: ");
        echo $row[1];
        echo nl2br("\n");
				echo nl2br("Birth Date: ");
        echo $row[2];
        echo nl2br("\n");
				echo nl2br("Chip Number: ");
        echo $row[3];
        echo nl2br("\n");
				echo nl2br("Gender: ");
        echo $row[4];
        echo nl2br("\n");
      }


		}

		else{
			echo 'did not work';
		}

    $activList="SELECT Occurs,Note FROM Activities a join Boardings b where a.BoardID = b.BoardID and b.PetID = '$chosenPet'";
    if($actResult=$mysqli -> query($activList)){
      if ($actResult->num_rows > 0) {
        while ($actRow = mysqli_fetch_row($actResult)) {
echo nl2br("\n");
					echo nl2br("Activity Time: ");
					echo $actRow[0];
          echo nl2br("\n");
					echo nl2br("Activity Description: ");
          echo $actRow[1];
          echo nl2br("\n");
					echo nl2br("\n");
        }
    }}
		// Close connection
		$mysqli -> close();
		?>
  </center>
</body>
</html>
