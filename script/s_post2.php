<?php
  $servername = "192.168.17.150";
  $username = "mysqlu";
  $password = "Qw3rt&.12345";
  $database = "world";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }
?>
