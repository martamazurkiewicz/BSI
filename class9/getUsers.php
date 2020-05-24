<?php
require 'connectionCredentials.php';
require 'user.php';
$con = new mysqli($host,$username,$password,$db);
if ($con->connect_errno != 0) {
    throw new Exception(mysqli_connect_errno());
}
else
{
    $query = "SELECT id, name, surname FROM USERS";
    $result = $con->query($query);
    if ($result) {
        $usersArr = array();
        while($row = $result->fetch_assoc())
        {
            $user = new User();
            $user->id = $row['id'];
            $user->name = $row['name'];
            $user->surname = $row['surname'];
            $usersArr [] = $user;
        }
        $con->close();
        echo json_encode($usersArr);
    }
    else {
        throw new Exception($con->error);
    }
}