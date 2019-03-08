<?php

include("db_connect.php");

$firstname= $_POST["firstname"];
$lastname= $_POST["lastname"];
$superpower= $_POST["superpower"];

$sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('$firstname', '$lastname', '$superpower')";

if(mysqli_query($db, $sql)) {
}else{
    echo "Error: ".$sql."<br>".mysqli_error($db);
}

header("location:index.php");

?>
/*
 * Created by PhpStorm.
 * User: pauline
 * Date: 2019-03-08
 * Time: 19:24
 */