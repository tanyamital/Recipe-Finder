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
 
 $sql = "SELECT title,cuisine_name,ingredients_description,method_description,rating,prep_time,serving_size from recipe where title='$_POST[title]' and cuisine_name='$_POST[cuisine]' and chef_name='$_POST[cname]' and rating='$_POST[rating]' and prep_time='$_POST[time]' and serving_size='$_POST[size]'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	echo $row["title"] . $row["cuisine_name"]. $row["chef_name"]. $row["ingredients_description"]. $row["method_description"]. $row["rating"]. $row["prep_time"].$row["serving_size"]."<br>";
  }
} else {
  echo "No results";
}



 
$conn->close();
//exit();

?>