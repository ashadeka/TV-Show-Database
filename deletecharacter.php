<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["name"];
$role=$_POST["role"];

// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "delete from characters where name = '$name' and role = '$role'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
