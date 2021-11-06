<?php
$mysqli = new mysqli("localhost","root","","vidu");

// Check connection
if ($mysqli->connect_errno) {
  echo "không thể kết nối MySQL: " . $mysqli->connect_error;
  exit();
}
?>