<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["showname"];
$number = $_POST["number"];
$title=$_POST["title"];

// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE episodes SET title = '$title' WHERE showname = '$name' and number = $number";

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
