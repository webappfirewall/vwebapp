<?php
  $servername = "192.168.17.150";
  $username = "mysqlu";
  $password = "Qw3rt&.12345";
  $database = "world";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM city limit 5";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "Name: " . $row["Name"]. " Population: " . $row["Population"]. "<br>";
      }
      echo "Done";
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
?>
