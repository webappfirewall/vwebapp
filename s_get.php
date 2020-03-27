<?php
  $servername = "localhost";
  $username = "usr_db";
  $password = "Qw3rt&.12345";
  $db = "vwebapp";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $db);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $input = $_GET['f_get1'];

  $sql = "SELECT * FROM Persons" . $input;
  echo "SQL> " . $sql . "<br>";

  if (mysqli_query($conn, $sql)) {
    echo "Query executed <br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
