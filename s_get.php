<?php
  $server = "192.168.17.150";
  $usr = "root";
  $pwd = "Qw3rt&.12345";

  $conn = mysqli_connect($server, $usr, $pwd);

  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo "Connected successfully";
?>
