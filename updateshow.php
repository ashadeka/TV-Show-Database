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
$sql = "UPDATE tvshow SET  year_start= $yearstart, year_end=$yearend
WHERE show_name = '$name' and studio_name = '$studio'";

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
