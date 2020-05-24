<?php
require 'connectionCredentials.php';
$con = new mysqli($host,$username,$password,$db);
if ($con->connect_errno != 0) {
    throw new Exception(mysqli_connect_errno());
}
else
{
    // Takes raw data from the request
    //$json = file_get_contents('php://input');
    // Converts it into a PHP object
    //$data = json_decode($json);
    //$id = $data->id;
    //$name = $data->name;
    //$surname = $data->surname;
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $name = htmlspecialchars(strip_tags($name), ENT_QUOTES);
    $surname = htmlspecialchars(strip_tags($surname), ENT_QUOTES);

    $query = "UPDATE USERS SET name='".$name."',surname='".$surname."'WHERE id=".$id;

    if ($con->query($query)) {
        $con->close();
        echo json_encode(array("name" => $name, "surname" => $surname));
    }
    else {
        $con->close();
        throw new Exception($con->error);
    }
}