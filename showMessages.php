<!DOCTYPE html>
<html>

<head>
	<title>List Messages</title>
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
	<center>
		<nav>
		<a class="selected links" href="https://turing.cs.olemiss.edu/~fwroush/planner.php">Pet Planner</a>
		</nav>
    <h1>Messages</h1>

		<?php
		$mysqli = new mysqli("localhost","fwroush","olemiss2021","fwroush");
		// Check connection
		if ($mysqli->connect_errno) {
		 echo "Failed to connect to MySQL: " . $mysqli->connect_error;
		 exit();
		}

		// Performing insert query execution
		$sql = "SELECT * FROM Messages ";
			//echo $sql;

    if($result = $mysqli -> query($sql)){
      while ($row = mysqli_fetch_row($result)) {
        echo "Owner Email:     ----$row[0]";
        echo nl2br("\n");
        echo "Animal in Facility:     ----$row[1]";
        echo nl2br("\n");
        echo "Message:     ----$row[2]";
        echo nl2br("\n");
        echo $row[3];
        echo nl2br("\n");
        echo $row[4];
        echo nl2br("\n");
      }


		}

		else{
			echo 'did not work';
		}


		// Close connection
		$mysqli -> close();
		?>
    <form action="deleteMessages.php" method="post">


<p>
					<label for="Question">Would You Like to Delete All Messages?</label>

			</p>



			<input type="submit" value="Delete Messages">
		</form>
  </center>
</body>
</html>
