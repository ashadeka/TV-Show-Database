<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["showname"];
$studio=$_POST["studioname"];


// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "delete from tvshow where (show_name = '$name' and studio_name = '$studio')";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
