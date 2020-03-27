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

  $sql = "INSERT INTO Products VALUES ( , 'Samsung', 'A 51', 'Smartphone', 1);";
  $sql .= "INSERT INTO Products VALUES ( , 'Samsung', 'S 20 Ultra', 'Smartphone', 0);";
  $sql = "INSERT INTO Products VALUES ( , 'Samsung', 'A 71', 'Smartphone', 1);";
  $sql .= "INSERT INTO Products VALUES ( , 'Samsung', 'S 20+', 'Smartphone', 0);";
  $sql = "INSERT INTO Products VALUES ( , 'Samsung', 'A 20', 'Smartphone', 0);";
  $sql .= "INSERT INTO Products VALUES ( , 'Samsung', 'M 10s', 'Smartphone', 1);";
  $sql .= "INSERT INTO MyGuests VALUES ( , 'Samsung', 'Note 10+', 'Smartphone', 1)";

  if (mysqli_multi_query($conn, $sql)) {
      echo "New records created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
