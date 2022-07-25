<?php
$host = "database";
$username = "tutorials_user";
$password = "change_me";
$database = "tutorials";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
}

function query($query)
{
      global $conn;
      $result = $conn->query($query);
      $rows	= [];
      while( $row = $result->fetch_assoc())
      {
            $rows[] = $row;
      }
      return $rows;
}
?>