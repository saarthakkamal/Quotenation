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
    $sql = "DELETE FROM SavedQuotes WHERE Quote = '".$_POST['quote']."'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        header("location: ./Savedd.html");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $conn->close();
?>