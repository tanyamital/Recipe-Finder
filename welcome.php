<html>
<body>

<?php echo $_POST["title"]; ?><br>
<?php echo $_POST["cuisine"]; ?><br>
<?php echo $_POST["ingredients"]; ?><br>
<?php echo $_POST["method"]; ?><br>
<?php echo $_POST["time"]; ?><br>
<?php echo $_POST["size"]; ?>

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
 $sql = "INSERT INTO recipe (title, cuisine_name, ingredients_description, method_description, prep_time, serving_size)
VALUES ('$_POST[title]', '$_POST[cuisine]','$_POST[ingredients]','$_POST[method]','$_POST[time]','$_POST[size]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

</body>
</html>