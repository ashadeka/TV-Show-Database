<?php

$username="root";
$password="";
$dbname="TV Show";


$name=$_POST["showname"];
$studio=$_POST["studioname"];
$yearstart=$_POST["yearstart"];
$yearend=$_POST["yearend"];

// Create connection
$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tvshow VALUES ('$name','$studio','$yearstart','$yearend')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
