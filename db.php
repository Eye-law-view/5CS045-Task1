<?php

$mysqli = new mysqli("localhost", "2562211", "banana", "db2562211");

if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

?>