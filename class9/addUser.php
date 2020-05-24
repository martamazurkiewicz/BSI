<?php
require 'connectionCredentials.php';
$con = new mysqli($host,$username,$password,$db);
if ($con->connect_errno != 0) {
    throw new Exception(mysqli_connect_errno());
}
else
{
    $name = $_POST['name'];
    $name = htmlspecialchars(strip_tags($name), ENT_QUOTES);
    $surname = $_POST['surname'];
    $surname = htmlspecialchars(strip_tags($surname), ENT_QUOTES);

    $query = "INSERT INTO USERS(name, surname) VALUES ('" . $name ."', '" . $surname . "')";

    if ($con->query($query)) {
        echo json_encode(array("id" => $con->insert_id, "name" => $name, "surname" => $surname));
    }
    else {
        throw new Exception($con->error);
    }
}