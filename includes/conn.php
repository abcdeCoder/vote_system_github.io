<?php
$conn = new mysqli('sql6.freesqldatabase.com', 'sql6506104', '6M6llyvwZH', 'sql6506104');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

?>