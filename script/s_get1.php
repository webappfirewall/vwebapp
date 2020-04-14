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

  $input1 = $_GET["input1"];

  $sql = "SELECT * FROM city WHERE CountryCode = '$input1'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      echo "
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Name</th>
            <th scope='col'>CountryCode</th>
            <th scope='col'>District</th>
            <th scope='col'>Population</th>
          </tr>
        </thead>
      ";
      while($row = mysqli_fetch_assoc($result)) {
          echo "Name: " . $row["Name"] . "\tCountryCode: " . $row["CountryCode"] . "\tDistrict: " . $row["District"] . "\tPopulation: " . $row["Population"] . "<br>";
      }
      echo "Done";
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
?>
