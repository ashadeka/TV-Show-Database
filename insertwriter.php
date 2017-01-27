<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["name"];
$sex=$_POST["sex"];
$salary=$_POST["salary"];

// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO writer VALUES ('$name',$sex','$salary')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
