<?php
if(isset($_COOKIE['hotel_register']))
  header('Location: log.html');
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  include 'connection.php';
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $exists = $conn->query("SELECT * FROM hotel_register WHERE username = '$username' and password = '$password'");
  if($exists->num_rows === 1)
    header('Location: Hotel.html');
  else{
    header('Location:wrong.html');
  }
} 
?>


