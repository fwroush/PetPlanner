<!DOCTYPE html>
<html lang="en">

<head>
	<title>List Activities</title>
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
	<center>
		<nav>
		<a class="selected links" href="https://turing.cs.olemiss.edu/~fwroush/planner.php">Pet Planner</a>
		</nav>
		<h1>Find Activities</h1>

		<form action="listActivities.php" method="post">


<p>
					<label for="Email">Email Address:</label>
					<input type="text" name="Email" id="Email">
			</p>



			<input type="submit" value="Submit">
		</form>
	</center>
</body>

</html>
