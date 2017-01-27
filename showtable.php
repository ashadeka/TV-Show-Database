 <?php
$tablename=$_POST["table"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="TV Show";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
switch ($tablename) {
    case "tvshow":
    $sql = "SELECT * FROM tvshow";
    $result = $conn->query($sql);
    $num=$result->num_rows;
    $conn->close();
    echo "<b><center>TV Shows</center></b><br><br>";
    $i=0;
    while ($i < $num) {

            $row = $result->fetch_assoc();
            $name=$row["show_name"];
            $studio=$row["studio_name"];
            $start=$row["year_start"];
            $end=$row["year_end"];
            echo "<b>Name: $name<br>Studio: $studio</b><br>Year Start: $start<br>Year End: $end<br><hr><br>";
          $i++;
        }
        break;
    case "actor":
    $sql = "SELECT * FROM actor";
    $result = $conn->query($sql);
    $num=$result->num_rows;
    $conn->close();
    echo "<b><center>Actors</center></b><br><br>";
    $i=0;
    while ($i < $num) {

            $row = $result->fetch_assoc();
            $name=$row["actor_name"];
            $address=$row["actor_address"];
            $age=$row["age"];
            $sex=$row["sex"];
            $salary = $row["salary"];
            echo "<b>Name: $name<br>Address: $address</b><br>Age: $age<br>Sex: $sex<br></b>Salary: $salary<br><hr><br>";
          $i++;
        }
        break;
    case "characters":
    $sql = "SELECT * FROM $tablename";

    $result = $conn->query($sql);
    $num=$result->num_rows;
    $conn->close();
    echo "<b><center>Characters</center></b><br><br>";

    $i=0;
    while ($i < $num) {

            $row = $result->fetch_assoc();
            $name=$row["name"];
            $role=$row["role"];
            $occupation=$row["occupation"];
            $lover=$row["significant_other"];
            echo "<b>Name: $name<br> Role: $role</b><br>Occupation: $occupation<br>significant other:$lover<br><hr><br>";
          $i++;
        }        break;
    case "writer":

    $sql = "SELECT * FROM $tablename";

    $result = $conn->query($sql);
    $num=$result->num_rows;
    $conn->close();
    echo "<b><center>Writers</center></b><br><br>";

    $i=0;

    while ($i < $num) {

            $row = $result->fetch_assoc();

            $name=$row["name"];
            $sex=$row["sex"];
            $salary =$row["salary"];
            echo "<b>Name: $name<br>Sex: $sex</b><br>Salary:$salary<br><hr><br>";
          $i++;
        }
      break;

      case "episodes":

      $sql = "SELECT * FROM $tablename";

      $result = $conn->query($sql);
      $num=$result->num_rows;
      $conn->close();
      echo "<b><center>Episodes</center></b><br><br>";

      $i=0;

      while ($i < $num) {

              $row = $result->fetch_assoc();
              $name=$row["showname"];
              $title=$row["title"];
              echo "Show name: $name<br>Episode Title: $title<br><hr><br>";
            $i++;
          }
        break;
}



?>
