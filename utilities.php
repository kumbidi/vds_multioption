<?php
$conn = null;

function db_connect() {
  global $conn;
  global $servername, $username, $password, $db;

  $conn = mysqli_connect($servername, $username, $password);
  if(!$conn)
  {
      die("Connection Failed :" . mysqli_connect_error());
  }
  
  mysqli_select_db($conn,$db);
}

?>