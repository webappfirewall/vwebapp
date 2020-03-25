<?php
  $servername = "192.168.17.150";
  $username = "mysql";
  $password = "Qw3rt&.12345";

  $conn = mysqli_connect($servername, $username, $pssword);

  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo "Connected successfully";
?>
