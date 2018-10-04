<?php

define("SERVER_NAME", "localhost");
define("USER_NAME", "root");
define("USER_PASS", "");
define("DATABASE_NAME", "php_practice");

// Create connection
$db_connection = $conn = new mysqli(SERVER_NAME, USER_NAME, USER_PASS, DATABASE_NAME);


// Check connection
if ($db_connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);

    // If you need to see the result comnes from mysql
    // echo "<pre>";
    // var_dump($db_connection);
    // echo "</pre>";
    // exit();
}