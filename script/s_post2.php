<?php
  $servername = "192.168.17.150";
  $username = "mysqlu";
  $password = "Qw3rt&.12345";
  $database = "blog";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
  }

  $userTag = $_POST['userTag'];
  $comment = $_POST['comment'];

  $sql = "INSERT INTO comments (usertag, comment) VALUES ('$userTag', '$comment')";

  if (mysqli_query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  $sql = "SELECT * FROM comments";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      echo "
      <head>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
        <script src='https://kit.fontawesome.com/0dfe5e4635.js' crossorigin='anonymous'></script>
      </head>
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>User Tag</th>
            <th scope='col'>Comment</th>
          </tr>
        </thead>
        <tbody>
      ";
      while($row = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
            <th scope='row'>
              <i class='fas fa-comment-dots'></i>
            </th>
            <td>" . $row['usertag'] . "</td>
            <td>" . $row['comment'] . "</td>
          </tr>
          ";
      }

      echo "
          </tbody>
        </table>
      ";
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
?>
