<?php

$username="root";
$password="";
$dbname="TV Show";
$searchword = $_POST['search'];

$conn = new mysqli('localhost', $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$actor = "select * from actor where actor_name like '%$searchword%' or actor_address like '%$searchword%' or age like '%$searchword%' or sex like '%$searchword%' or salary like '%$searchword%'";
$result = $conn->query($actor);
$num=$result->num_rows;
if($num > 0){
  echo "<b><center>Actor</center></b><br><br>";
}
$i=0;

while ($i < $num) {
        $row = $result->fetch_assoc();
        $name=$row["actor_name"];
        $address=$row["actor_address"];
        $age=$row["age"];
        $sex=$row["sex"];
        $salary = $row["salary"];
        echo "Name: $name<br>Address: $address<br>Age: $age<br>Sex: $sex<br></b>Salary: $salary<br><hr><br>";

      $i++;
    }
$tvshow = "select * from tvshow where show_name like '%$searchword%' or studio_name like '%$searchword%' or year_start like '%$searchword%' or year_end like '%$searchword%'";
 $tv_result = $conn->query($tvshow);
 $tv_num = $tv_result->num_rows;
if($tv_num >0){
 echo "<b><center>TV Shows</center></b><br><br>";
 }
 $x=0;
 while ($x < $tv_num) {

         $row = $tv_result->fetch_assoc();
         $name=$row["show_name"];
         $studio=$row["studio_name"];
         $start=$row["year_start"];
         $end=$row["year_end"];
         echo "Name: $name<br>Studio: $studio <br>Year Start: $start<br>Year End: $end<br><hr><br>";
       $x++;
     }
$characters = "select * from characters where name like '%$searchword%' or role like '%$searchword%' or occupation like '%$searchword%' or significant_other like '%$searchword%'";
$char_result = $conn->query($characters);
$char_num = $char_result->num_rows;
if($char_num >0){
  echo "<b><center>Characters</center></b><br><br>";
}
$y=0;
while ($y < $char_num) {
  $row = $char_result->fetch_assoc();
  $name=$row["name"];
  $role=$row["role"];
  $occupation=$row["occupation"];
  $lover=$row["significant_other"];
  echo "Name: $name<br> Role: $role<br>Occupation: $occupation<br>Significant Other:$lover<br><hr><br>";
  $y++;
  }
$writer = "select * from writer where name like '%$searchword%' or salary like '%$searchword%' or sex like '%$searchword%'";
$writ_result = $conn->query($writer);
$writ_num = $writ_result->num_rows;
if($writ_num>0){
  echo "<b><center>Writers</center></b><br><br>";

}
$z=0;
while ($z < $writ_num) {
  $row = $writ_result->fetch_assoc();
  $name=$row["name"];
  $salary=$row["salary"];
  $sex=$row["sex"];
  echo "Name: $name<br>Sex: $sex<br>Salary:$salary<br><hr><br>";
  $z++;
    }


    $episodes = "select * from episodes where showname like '%$searchword%' or title like '%$searchword%'";
    $ep_result = $conn->query($episodes);
    $ep_num = $ep_result->num_rows;
    if($ep_num>0){
      echo "<b><center>Episodes</center></b><br><br>";
    }
    $a=0;
    while ($a < $ep_num) {
      $row = $ep_result->fetch_assoc();
      $name=$row["showname"];
      $number = $row["number"];
      $title=$row["title"];
      echo "Show Name: $name<br>Episode Number:$number<br>Episode Title: $title<br><hr><br>";
      $a++;
        }
$conn->close();

?>
