<?php
  $servername = "localhost";
  $username = "u_db";
  $password = "Qw3rt&.12345";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
?>
