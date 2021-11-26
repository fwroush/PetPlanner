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
img {
  width: 33%;
	height: 33%;
	border: 4px solid dodgerblue;
 	border-radius: 40px;
	float: left;
	padding: 5px;
}
.center {
text-align: center;
padding: 10px;
}
.ecenter {
text-align: center;
padding: 10px;
border: 4px solid dodgerblue;
border-radius: 40px;
}
</style>
</head>

<body>

	<nav>
<a class="selected links" href="petHome.php">Pet Planner</a>
<div class="rightSection">

<a class="links" href="login.php">Kennel Login</a>
<a class="links" href="custlogin.php">Customer Login</a>


</div>
</nav>
<div class="ecenter">Pet Planner is a convenient and easy way to keep track of the pets in your facility and to better communicate with clients. As a client, Pet Planner allows you to gain insight into your pets boarding activities and allows direct messages to the attendants. If you are a kennel employee, please choose Kennel Login and use your appropriate login. If you are a client, please choose Customer Login and use your information to log in or sign up.</div>
<div class="center">
<div class="center"><img src="pez.JPG" alt="Yorkie sitting on a blanket"></div>
<div class="center"><img src="cat.JPG" alt="White cat asleep on a blanket"></div>
<div class="center"><img src="gibby.JPG" alt="Frenchton's face"></div></div>

</body>

</html>
