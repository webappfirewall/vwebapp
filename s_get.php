<?php
  $servername = "localhost";
  $username = "";
  $password = "";

  $conn = mysqli_connect($servername, $username, $pssword);

  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo "Connected successfully";
?>
