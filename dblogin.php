<?php
  $conn = new mysqli('localhost', 'root', '','rockslide');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
?>
