<html>
<head>
    <meta charset="UTF-8"/>
    <title>Katalog użytkowników</title>
    <style>
		table {
			width: 40%;
			margin-left: 1%;
			padding-left: 1%;
			padding-top: 1%;
			padding-right: 1%;
			padding-bottom: 1%;
			border-collapse: separate;
            border-collapse:collapse;
			border-spacing: 10px;
			font-family: Arial, Helvetica, sans-serif;
		}
        tr {
            border-bottom:1pt solid black;
            height: 2em;
        }
		tr:hover {
			background-color: lightgray;
		}
	</style>
</head>
<body>
<?php
$conn = new mysqli('mysql.cba.pl','mmazMySQL','8MqnWe0RNR3PZRKs','mmaz') or die("Connect failed: %s\n". $conn -> error);
if(isset($_GET['addButton']))
{
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $addUser = "INSERT INTO USERS (NAME, SURNAME) VALUES ('".$name."','".$surname."');";
    $conn->query($addUser);
}
if(isset($_GET['deleteButton']))
{
    $deleteUser = "DELETE FROM USERS WHERE ID=".$_GET['ID'];
    $conn->query($deleteUser);
}
if(isset($_GET['saveButton']))
{
    $ID = $_GET['ID'];
    $saveUser = "UPDATE USERS SET NAME='".$_GET['editedName']."', SURNAME='".$_GET['editedSurname']."' WHERE ID=".$_GET['ID'].";";
    $conn->query($saveUser);
}
?>
<table>
<tr>
<form action="users.php" method="get">
<td>
<input type="text" name="name" placeholder="imię"/>
</td>
<td>
<input type="text" name="surname" placeholder="nazwisko"/>
</td>
<td>
<input type="submit" name="addButton" value="DODAJ"/>
</td>
</tr>
</form>
<?php
$getUsers = "SELECT * FROM USERS";
$result = $conn->query($getUsers);
while($row = $result->fetch_assoc()) {
    echo "<form action='users.php' method='get'>";
    echo "<tr><th>";
    if(isset($_GET['editButton']) && $_GET['ID']==$row['ID'])
    {
        echo "<input type='text' name='editedName' value ='".$row["NAME"]."'/>";
    }
    else
    {
    echo $row["NAME"];
    }
    echo "</th><th>";
    if(isset($_GET['editButton']) && $_GET['ID']==$row['ID'])
    {
        echo "<input type='text' name='editedSurname' value ='".$row["SURNAME"]."'/>";
    }
    else
    {
    echo $row["SURNAME"];
    }
    echo "</th><th>";
    if(isset($_GET['editButton']) && $_GET['ID']==$row['ID'])
    {
        echo "<input type='submit' name='saveButton' value='Zapisz'";
    }
    else
    {
        echo "<input type='submit' name='editButton' value='EDYTUJ'";
    }
    echo "</th><th>";
    if(isset($_GET['editButton']) && $_GET['ID']==$row['ID'])
    {
        echo "<input type='submit' name='cancelButton' value='ANULUJ'";
    }
    else
    {
        echo "<input type='submit' name='deleteButton' value='USUŃ'";
    }
    echo "</th></tr>";
    echo "<input type='hidden' name='ID' value='".$row["ID"]."'/>";
    echo "</form>";
}
$conn -> close();
?>
</table>
</body>
</html>