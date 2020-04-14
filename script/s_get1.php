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
      <head>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
      </head>
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Name</th>
            <th scope='col'>CountryCode</th>
            <th scope='col'>District</th>
            <th scope='col'>Population</th>
          </tr>
        </thead>
        <tbody>
      ";
      while($row = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
            <th scope='row'>$row['ID']</th>
            <td>$row['Name']</td>
            <td>$row['CountryCode']</td>
            <td>$row['District']</td>
            <td>$row['Population']</td
          </tr>
          ";
      }
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
?>
