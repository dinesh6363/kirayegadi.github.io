<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trip";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
// $id= $_GET['id'];
// $getdelete = $_POST['addcity'];
 $Del = $_GET['id'];
$sql = "DELETE FROM danny WHERE id = {$Del}";

if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
header("location:BhadegadiCity.php");
$conn->close();


?>