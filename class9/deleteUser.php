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
    $id = $_POST['id'];
    $query = "DELETE FROM USERS WHERE ID=" . $id;
    if ($con->query($query)) {
        $con->close();
        echo json_encode(array("message" => "success"));
    }
    else {
        $con->close();
        throw new Exception($con->error);
    }

}