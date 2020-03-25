<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "Qw3rt&.12345";

  $conn = mysqli_connect($servername, $username, $password);

  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo "Connected successfully";
?>
