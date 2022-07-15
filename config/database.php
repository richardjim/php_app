<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Password12!!');
define('DB_NAME', 'feedback');

// Create connection 
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//CHECK connection 
if ($conn->connect) {
    die('Connection Failed' . $conn->connect_error);
}

// echo 'CONNECTED';
