<?php require '../class7/redirection.php'; ?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Formularz</title>
	<style>
		table {
			border: 1px solid black;
			width: 40%;
			border-radius: 1em;
			margin-left: 1%;
			padding-left: 1%;
			padding-top: 1%;
			padding-right: 1%;
			padding-bottom: 1%;
			border-collapse: separate;
			border-spacing: 10px;
			font-family: Arial, Helvetica, sans-serif;
		}

		tr:hover {
			background-color: lightgray;
		}
		.color{
			background-color: #f5f5f5;
		}

		.output {
			width: 60%;
		}
	</style>
</head>

<body>

	<body>
		<table>
			<tr class="color">
				<th>
					Imię
				</th>
				<th class="output">
					<?php echo $_POST["name"]; ?>
				</th>
			</tr>
			<tr>
				<th>
					Nazwisko
				</th>
				<th class="output">
					<?php echo $_POST["surname"]; ?>
				</th>
			</tr>
			<tr class="color">
				<th>
					Ulica
				</th>
				<th class="output">
					<?php echo $_POST["street"]; ?>
				</th>
			</tr>
			<tr>
				<th>
					Numer domu
				</th>
				<th class="output">
					<?php echo $_POST["houseNumber"]; ?>
				</th>
			</tr>
			<tr class="color">
				<th>
					Numer mieszkania
				</th>
				<th class="output">
					<?php echo $_POST["flatNumber"]; ?>
				</th>
			</tr>
			<tr>
				<th>
					Miasto
				</th>
				<th class="output">
					<?php echo $_POST["city"]; ?>
				</th>
			</tr>
			<tr class="color">
				<th>
					Płeć
				</th>
				<th class="output">
					<?php
					if ($_POST["gender"] == "male") {
						echo "mężczyzna";
					} elseif ($_POST["gender"] == "female") {
						echo "kobieta";
					} else {
						echo "inna";
					}
					?>
				</th>
			</tr>
			<tr>
				<th>
					Czy posiadasz prawo jazdy?
				</th>
				<th class="output">
					<?php
					if(isset($_POST['dravingLicence']) && 
					$_POST['dravingLicence'] == 'yes') {
						echo "Tak";
					} else {
						echo "Nie";
					}
					?>
				</th>
			</tr>
			<tr class="color">
				<th>
					Województwo
				</th>
				<th class="output">
					<?php echo $_POST["voivodeship"]; ?>
				</th>
			</tr>
			<tr>
				<th>
					Uwagi
				</th>
				<th class="output">
					<?php echo $_POST["comments"]; ?>
				</th>
			</tr>
			<tr class="color">
				<th>
					Data Urodzenia
				</th>
				<th class="output">
					<?php echo $_POST["dateofBirth"]; ?>
				</th>
			</tr>
			<tr>
				<th>
					Numer Telefonu
				</th>
				<th class="output">
					<?php echo $_POST["phoneNumber"]; ?>
				</th>
			</tr>
		</table>
	</body>

</html>