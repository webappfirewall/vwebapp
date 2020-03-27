<?php
  $servername = "localhost";
  $username = "usr_db";
  $password = "Qw3rt&.12345";
  $dbname = "vwebapp";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // sql to create table
  $sql = "CREATE TABLE Products (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(30) NOT NULL,
    model VARCHAR(30) NOT NULL,
    category VARCHAR(50),
    released INT(6)
  )";

  if (mysqli_query($conn, $sql)) {
      echo "Table created successfully";
  } else {
      echo "Error creating table: " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
