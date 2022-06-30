<?php
$conn = new mysqli('remotemysql.com', 'lbkcZg4Gn6', '57yUQFULYx', 'lbkcZg4Gn6');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

?>