<!DOCTYPE html>
<html>

<head>
	<title>Insert Owner</title>
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
	<center>

		<?php

		// servername => localhost
		// username => fwroush
		// password => olemiss2021
		// database name => fwroush
		$mysqli = new mysqli("localhost","fwroush","olemiss2021","fwroush");

		// Check connection
		if ($mysqli -> connect_errno) {
		 echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		 exit();
		}

		// Taking all 5 values from the form data(input)
		$email = $_POST['Email'];

		$last_name = $_POST['Name'];
		$address = $_POST['Address'];

		$phone = $_POST['Phone'];

		// Performing insert query execution
		$sql = "INSERT INTO Owners(Email,Name,Address,Phone) VALUES ('$email','$last_name','$address','$phone')";
			echo $sql;

		if($result = $mysqli -> query($sql)){
			echo 'inserted record';
		}

		else{
			echo 'did not insert';
		}


		// Close connection
		$mysqli -> close();
		?>
	</center>
</body>

</html>
