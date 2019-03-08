<?php
/**
 * Created by PhpStorm.
 * User: pauline
 * Date: 2019-03-08
 * Time: 19:25
 **/

$servername = "localhost";
$dbname="superheroes";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername,  $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


