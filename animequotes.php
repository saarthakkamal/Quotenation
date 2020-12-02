<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="user_registration";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * from Quotes where Category='Anime'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td style=\"text-align: center; vertical-align: middle; padding: 25px 5px;\">" . $row['Origin'] . "</td>";
            echo "<td style=\"text-align: center; vertical-align: middle; padding: 25px 5px;\">" . $row['Quote'] . "</td>";
            echo "<td style=\"text-align: center; vertical-align: middle; padding: 25px 5px;\">" . $row['Rating'] . "</td>";
            echo "<td style=\"text-align: center; vertical-align: middle;\"><button class=\"btn\" type=\"submit\" value=\"button\" onclick=\"saveQuote('". $row['Origin'] ."','". $row['Quote'] ."','Anime','". $row['Rating'] ."')\">Add</button></td>";;
            echo "</tr>";
        }
    }
    $conn->close();
?>