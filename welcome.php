
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

  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["clientloggedin"]) || $_SESSION["clientloggedin"] !== true){
      header("location: petHome.php");
      exit;
  }

  ?>
	<nav>
<a class="selected links" href="welcome.php">Pet Planner</a>
<div class="rightSection">
<a class="links" href="messageIndex.php">Send A Message</a>
<a class="links" href="listActivities/activities.php">Show Boarding Activities</a>

<a class="links" href="logout.php">Logout</a>

</div>
</nav>

</body>

</html>
