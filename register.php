<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ahoccdb";

$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$mobilenumber=$_POST['mobilenumber'];
$yourcity=$_POST['city'];
$email=$_POST['email'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO freecounselling (firstname, lastname, mobilenumber, city, email)
VALUES ('$first_name', '$last_name', '$mobilenumber', '$yourcity', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>