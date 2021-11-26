<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pet Planner</title>
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
.outlinks {
	font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	font-weight: bold;
	color: white;
	padding: 12px;
	text-decoration: none;
	font-size: 18px;
	line-height: 25px;
	border-radius: 4px;

}
.outlinks:hover{
	background-color: rgb(214, 238, 77);
	color: rgb(42, 10, 94);
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
	<?php
	// Initialize the session
	session_start();

	// Check if the user is logged in, otherwise redirect to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	    header("location: petHome.php");
	    exit;
	}

	// Include config file
	require_once "config.php";
	?>
	<nav>
<a class="selected links" href="planner.php">Pet Planner</a>
<div class="rightSection">

<a class="links" href="insertOwner/">New Owner</a>
<a class="links" href="insertPet/index2.php">New Pet</a>
<a class="links" href="insertAttendant/index3.php">New Attendant</a>
<a class="links" href="insertBoarding/index4.php">New Boarding</a>
<a class="links" href="insertActivity/index5.php">New Activity</a>

<a class="links" href="logout.php">Logout</a>

</div>
</nav>
<div class="outlinks" style="text-align:center">
<a style="display:inline-block" href="listActivities/kennelactivities.php">Show Activities</a></div>
<div class="outlinks" style="text-align:center">
<a style="display:inline-block" href="showMessages.php">Show Messages</a></div>
</body>

</html>
