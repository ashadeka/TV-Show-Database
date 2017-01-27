<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["name"];
$role=$_POST["role"];
$occupation=$_POST["occupation"];
$lover=$_POST["significantother"];

// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO characters VALUES ('$name','$role','$occupation','$lover')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
