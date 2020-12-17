<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your city is: <?php echo $_POST["city"]; ?>

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
 $sql = "INSERT INTO user ( name, email, location, password)
VALUES ('$_POST[name]', '$_POST[email]','$_POST[city]','$_POST[password]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: http://localhost/website/login.php"); 
exit();
die();
?>

</body>
</html>