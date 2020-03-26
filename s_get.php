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

  $input = $_GET['f_get1'];

  $sql = "SELECT * FROM Persons" . $input;

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
