<?php
if(isset($_POST['addcity'])){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "trip";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname );
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $City = $_POST['addcity'];
   
   

$sql = "INSERT INTO `danny` ( `cityname`) VALUES ('$City')";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// echo "Your information submitted succesfully";


$conn->close();

header("location:BhadegadiCity.php");


}
?>




