<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";

  $conn = mysqli_connect($servername, $username, $pssword);

  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo "Connected successfully";
?>
