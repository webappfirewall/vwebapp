<?php
  echo "Hello from s_get.php <br>"

  $servername = "localhost";
  $username = "root";
  $password = "Qw3rt&.12345";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  } else {
    echo 'Connected sucessfully <br>';
  }

  $input = $_GET['f_get1'];
  echo "input: " . $input;

  $sql = "SELECT * FROM Persons" . $input;
  echo "SQL> " . $sql . "<br>"

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
