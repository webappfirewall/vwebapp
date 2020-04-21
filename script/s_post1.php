<?php
  $servername = "192.168.17.150";
  $username = "mysqlu";
  $password = "Qw3rt&.12345";
  $database = "users";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }

  $userName = $_POST['userName'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username = 'admin' and 1=1;--' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "Usuario encontrado";
  } else {
    echo "Usuario NO encontrado";
  }
?>
