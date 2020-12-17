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
echo "Connected successfully";
 $sql = "SELECT * from user where email='$_POST[email]' and password='$_POST[password]'";
$result = $conn->query($sql);

if ($result->num_rows > 0)  {

echo "login success";
  header("Location: http://localhost/website/search.php?q=".$_POST[email]);
} else {
	echo "login fail";
  header("Location: http://localhost/website/login.php");
}

 
$conn->close();
exit();

?>