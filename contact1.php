<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
//Database connection
$conn = new mysqli('localhost','root','','dataa');
if ($conn->connect_error) {
  die('Connection Failed :'.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into all_data1(name, email, message) values(?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $message);
  $stmt->execute();
  echo "Message Sent Successfully....";
  $stmt->close();
  $conn->close();
}
?>