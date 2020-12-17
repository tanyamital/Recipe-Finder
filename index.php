<!DOCTYPE html>
<html>
<head>
	<title>RECIPE FINDER</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>

		<div class="main">
			
			<ul>

				<li class="active"><a href="#">About</a></li>
				<li><a href="./create.php">Sign Up</a></li>
				

			</ul>
		</div>
		<div class="title">
			<h1>RECIPE FINDER</h1>
		</div>
		<div class="button">
			<a href="./login.php" class="btn">SEARCH</a>
			<a href="./loginchef.php" class="btn">ADD</a>
		</div>
	</header>
	<?php
//echo "My first PHP script!";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
/*$sql = "SELECT ingredients_description,method_description from recipe where cuisine_name = 'indian'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	echo "ingredients: " . $row["ingredients_description"]. " Method: " . $row["method_description"].  "<br>";
    //echo "Ingredients: " . $row["ingredients_description"]. " - Method: " . $row["method_description"].;
  }
} else {
  echo "0 results";
}
// $sql = "INSERT INTO chef (chef_id, name, email,cuisine_name, nationailty)
// VALUES (5, 'Doe', 'john@example.com','mexican','indian')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }*/


$conn->close();

?>


</body>
</html>
