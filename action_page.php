<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Quotes (Origin,Quote,Category,Rating) VALUES ('".$_POST['origin']."','".$_POST['quote']."','".$_POST['category']."','".$_POST['rating']."');";
if ($conn->query($sql) === TRUE) {
  header("location: ./regg.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>