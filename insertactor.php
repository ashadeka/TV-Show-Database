<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["name"];
$address=$_POST["address"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$salary=$_POST["salary"];

// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO actor VALUES ('$name','$address','$age','$sex','$salary')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
