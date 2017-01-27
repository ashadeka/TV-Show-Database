<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["name"];
$address=$_POST["address"];

// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "delete from actor where actor_name = '$name' and actor_address = '$address'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
