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

  $sql = "SELECT * FROM Products WHERE category = '" . $input . "' AND released = 1";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Model: " . $row["model"]. "<br>";
    }
} else {
    echo "0 results";
}

  mysqli_close($conn);
?>
