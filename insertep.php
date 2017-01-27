<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["name"];
$title=$_POST["title"];
$number=$_POST["number"];

// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO episodes VALUES ('$name','$title',$number)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
