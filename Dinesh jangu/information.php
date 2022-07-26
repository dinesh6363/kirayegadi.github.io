<?php
if(isset($_POST['name'])){
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
    $Bname =$_POST['buisnessname'];
    $desc = $_POST['description'];
    $name = $_POST['name'];
    $email =$_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
   

$sql = "INSERT INTO  `information`  (`buisnessname`, `description`, `name`, `email`, `city`, `state`, `pincode`) VALUES ( '$Bname', '$desc', '$name', '$email', '$city', '$state', '$pincode')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "Your information submitted succesfully";

$conn->close();

header(
  'location:BhadegadiMyinformation.html'
);
}




?>