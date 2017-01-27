<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["name"];
$role = $_POST["role"];
$occupation = $_POST["occupation"];
$sigoth= $_POST["significantother"];

// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE characters SET occupation = '$occupation', significant_other = '$sigoth'
WHERE name = '$name' and role = '$role'";

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
