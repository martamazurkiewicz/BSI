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
      <input type="text" class="form-control" id="name" placeholder="Imię">
    </div>
    <div class="col-auto">
        <input type="text" class="form-control" id="surname" placeholder="Nazwisko">
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary" onclick="addNewUser()">Dodaj Studenta</button>
    </div>
  </div>
</form>
<table id="usersTable"></table>
<script>refreshUsersCatalogue()</script>
</body>
</html>