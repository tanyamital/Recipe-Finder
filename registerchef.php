<html>
<body>



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
 $sql = "INSERT INTO chef ( name, email, nationailty, cuisine_name, password)
VALUES ('$_POST[name]', '$_POST[email]','$_POST[country]', '$_POST[cuisine]','$_POST[password]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: http://localhost/website/loginchef.php"); 
exit();
die();
?>

</body>
</html>