<?php
  header('Content-Type: application/json');
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="user_registration";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO SavedQuotes (Origin,Quote,Category,Rating) VALUES ('".$_POST['origin']."','".$_POST['quote']."','".$_POST['category']."','".$_POST['rating']."');";
    $result = $conn->query($sql);

    if ($result === TRUE) {
      header("location: ./Savedd.html");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();
?>