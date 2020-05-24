<?php require '../class7/redirection.php'; ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Formularz</title>
    <script src="regex.js"></script>
	<style>
		input{
			border-color: grey;
		}
		table{
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
		input[type=text]{
			width: 90%;
			height: 1.5em;
		}
		input:hover {
			background-color: lightgray;
		}
		</style>
</head>
<body>
	<table>
		<form onsubmit="return validateForm()">
		<tr>
			<th>
				<label for="name">Imię</label>
			</th>
			<th>
				<input type="text" id="name" placeholder="Imię">
			</th>
		</tr>
		<tr>
			<th>
				<label for="name">Nazwisko</label>
			</th>
			<th>
				<input type="text" id="surname" placeholder="Nazwisko">
			</th>
		</tr>
		<tr>
			<th>
				<label for="street">Ulica</label>
			</th>
			<th>
				<input type="text" id="street" placeholder="Ulica">
			</th>
		</tr>
		<tr>
			<th>
				<label for="houseNumber">Numer domu</label>
			</th>
			<th>
				<input type="text" id="houseNumber" placeholder="Numer domu">
			</th>
		</tr>
		<tr>
			<th>
				<label for="flatNumber">Numer mieszkania</label>
			</th>
			<th>
				<input type="text" id="flatNumber" placeholder="Numer mieszkania">
			</th>
		</tr>
		<tr>
			<th>
				<label for="city">Miasto</label>
			</th>
			<th>
				<input type="text" id="city" placeholder="Miasto">
			</th>
		</tr>
		<tr>
			<th>
				<label for="gender">Płeć</label>
			</th>
			<th>
				<input type="radio" id="male" name="gender" value="male" checked>
				<label for="male">Mężczyzna</label>
		
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">Kobieta</label>
		
				<input type="radio" id="other" name="gender" value="other">
				<label for="other">Inna</label>
			</th>
		</tr>
		<tr>
			<th>
				<label for="dravingLicence">Czy posiadasz prawo jazdy?</label>
			</th>
			<th>
				<input type="checkbox" id="dravingLicence" value="yes">
				<label for="dravingLicence">Tak</label>
			</th>
		</tr>
		<tr>
			<th>
				<label for="voivodeship">Województwo</label>
			</th>
			<th>
				<select id="voivodeship" style="width: 90%; height: 1.5em;"> 
					<option value="dolnośląskie">dolnośląskie</option>
					<option value="kujawsko-pomorskie">kujawsko-pomorskie</option>
					<option value="lubelskie">lubelskie</option>
					<option value="lubuskie">lubuskie</option>
					<option value="łódzkie">łódzkie</option>
					<option value="małopolskie">małopolskie</option>
					<option value="mazowieckie">mazowieckie</option>
					<option value="opolskie">opolskie</option>
					<option value="podkarpackie">podkarpackie</option>
					<option value="podlaskie">podlaskie</option>
					<option value="pomorskie">pomorskie</option>
					<option value="śląskie">śląskie</option>
					<option value="świętokrzyskie">świętokrzyskie</option>
					<option value="warmińsko-mazurskie">warmińsko-mazurskie</option>
					<option value="wielkopolskie">wielkopolskie</option>
					<option value="zachodniopomorskie">zachodniopomorskie</option>
				</select>
			</th>
		</tr>
		<tr>
			<th>
				<label for="comments">Uwagi</label>
			</th>
			<th>
				<input type="text" id="comments" style="height:4em;">
			</th>
		</tr>
		<tr>
			<th>
				<label for="dateofBirth">Data Urodzenia</label>
			</th>
			<th>
				<input type="text" id="dateofBirth" placeholder="dd.mm.rrrr">
			</th>
		</tr>
		<tr>
			<th>
				<label for="phoneNumber">Numer Telefonu</label>
			</th>
			<th>
				<input type="text" id="phoneNumber" placeholder="123-456-789">
			</th>
		</tr>
		<tr>
			<th>
				<input style="width: 10em;height: 2.2em;" type="submit" id="submit" value="Zatwierdź">
			</th>
			<th>
				<input style="width: 10em;height: 2.2em;" type="reset" id="reset" value="Wyczyść" onclick="resetForm()">
			</th>
		</tr>
	</form>
</table>
</body>
</html>