<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'MyStr0ng!Passw0rd');
define('DB_NAME', 'ChefCuisinier');

$conn = new mysqli(HOST, USER, PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>