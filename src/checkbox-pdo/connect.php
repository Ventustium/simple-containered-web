<?php
$host = "database";
$username = "tutorials_user";
$password = "change_me";
$database = "tutorials";

return new PDO("mysql:host=$host; dbname=$database", $username, $password, array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
?>