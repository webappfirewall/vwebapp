<?php
  $servername = "192.168.17.150";
  $username = "root";
  $password = "";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
?>
