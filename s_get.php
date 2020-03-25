<?php
  $servername = "localhost";
  $username = "mysql";
  $password = "";

  $conn = mysqli_connect($servername, $username, $password);

  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo "Connected successfully";
?>
