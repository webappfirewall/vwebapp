<?php
  $server = "localhost";
  $usr = "u_db";
  $pwd = "Qw3rt&.12345";

  echo 'Conecting with MySQL Server...';

  $conn = mysqli_connect($server, $usr, $pwd);

  if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  echo "Connected successfully";
?>
