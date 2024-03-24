<?php
$con = mysqli_connect("localhost","root","","nizam_tenda");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>