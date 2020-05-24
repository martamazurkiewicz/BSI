<?php require '../class7/redirection.php'; ?>
<html>
<head>
    <meta charset="x-UTF-16LE-BOM">
    <title>Katalog użytkowników</title>
    <script src="usersCatalogue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<form>
  <div class="form-row align-items-center" style="margin: 1em">
    <div class="col-auto">
      <input type="text" class="form-control" name="name" id="newName" placeholder="Imię">
    </div>
    <div class="col-auto">
        <input type="text" class="form-control" name="surname" id="newSurname" placeholder="Nazwisko">
    </div>
    <div class="col-auto">
      <button type="button" class="btn btn-primary" name="addButton" onclick="addNewUser()">Dodaj Studenta</button>
    </div>
  </div>
</form>
<table class="table table-hover" style="margin: 1em;width: 40%" id="usersTable">
    <thead class="thead-light">
        <tr>
            <th scope="col">Nr</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody id="usersTableBody">
    </tbody>
</table>
<script>refreshUsersCatalogue()</script>
</body>
</html>