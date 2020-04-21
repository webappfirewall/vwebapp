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

  $sql = "SELECT * FROM users WHERE username = '$userName' AND password = '$password'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "
    <head>
      <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
      <script src='https://kit.fontawesome.com/0dfe5e4635.js' crossorigin='anonymous'></script>
    </head>
    <table class='table'>
      <thead>
        <tr>
          <th scope='col'></th>
          <th scope='col'>User Name</th>
          <th scope='col'>Password</th>
        </tr>
      </thead>
      <tbody>
    ";
    while($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
          <th scope='row'>
            <i class='fas fa-info-circle'></i>
          </th>
          <td>" . $row['username'] . "</td>
          <td>" . $row['password'] . "</td>
        </tr>
        ";
    }

    echo "
        </tbody>
      </table>
    ";
  } else {
    echo "Usuario NO encontrado";
  }
?>
