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

$sql = "UPDATE actor SET  age = $age, sex = '$sex', salary = $salary
WHERE actor_name = '$name' and actor_address = '$address'";

if ($conn->query($sql) === TRUE) {
    echo "New record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
