<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["showname"];
$number=$_POST["number"];


// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "delete from episodes where (showname = '$name' number = $number)";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
