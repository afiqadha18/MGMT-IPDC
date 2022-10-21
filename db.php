<?php
$db_server = "127.0.0.1";
$db_username = "radius";
$db_password = "AfiqAdha18";
$db_name = "radius";

// Create connection
$conn = new mysqli($db_server, $db_username, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nasname, shortname, type FROM nas ORDER BY id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["id"] . " - Router IP: " . $row["nasname"]. " | Hostname: " . $row["shortname"] . " | Type: " . $row["type"] . "<br>";
  }
} else {
  echo "0 results <br>";
}

// $user_name_php = 'ipdc_admin';
// $user_password_php = '1PDCH3b4tg1l3r';
// $user_password_php = hash('sha256', $user_password_php);
// echo "<br>" . $user_password_php . "<br>";

// $compare = "SELECT * FROM oc_users WHERE uid = '$user_name_php' AND password = '$user_password_php'";
// $compare_result = $conn->query($compare);
// if ($compare_result->num_rows > 0) {
//   echo "<br>Can Login Now!";
// } else {
//   echo "<br>Unable to Login!";
// }

// $conn->close();
?>