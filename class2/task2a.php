<?php require '../class7/redirection.php'; ?>
<!doctype html>
<html>
<head> 
	<meta charset="UTF-8">
	<title>Zajęcia 2a</title>
	<style>
	.container{
	width: 50em;
	}
	
	.row{
    padding-left: 1%;
	}
	
	.form {
	float: left;
	width: 30%;
	}
	
	.input {
	float: left;
	width: 70%;
	}
	</style>
</head>
<body>
	<div class="container">
		<form>
		
		<div class="row">
			<div class="form">
				<label for="name">Imię</label>
			</div>
			<div class="input">
				<input type="text" id="name" name="name">
			</div>
		</div>
		
		<div class="row">
			<div class="form">
				<label for="name">Nazwisko</label>
			</div>
			<div class="input">
				<input type="text" id="surname" name="surname">
			</div>
		</div>
		
		<div class="row">
			<div class="form">
					<label for="street">Ulica</label>
			</div>
			<div class="input">
					<input type="text" id="street" name="street">
			</div>
		</div>
		
		<div class="row">
			<div class="form">
					<label for="houseNumber">Numer domu</label>
			</div>
			<div class="input">
					<input type="text" id="houseNumber" name="houseNumber">
			</div>
		</div>

		<div class="row">
			<div class="form">
					<label for="flatNumber">Numer mieszkania</label>
			</div>
			<div class="input">
					<input type="text" id="flatNumber" name="flatNumber">
			</div>
		</div>

		<div class="row">
			<div class="form">
					<label for="city">Miasto</label>
			</div>
			<div class="input">
					<input type="text" id="city" name="city">
			</div>
		</div>
		
		<div class="row">
			<div class="form">
					Płeć
			</div>
			<div class="input">
				<input type="radio" id="male" name="gender" value="male">
				<label for="male">Mężczyzna</label>
		
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">Kobieta</label>
		
				<input type="radio" id="other" name="gender" value="other">
				<label for="other">Inna</label>
			</div>
		</div>

		<div class="row">
			<div class="form">
				Czy posiadasz prawo jazdy?
			</div>
			<div class="input">
				<input type="checkbox" id="yes" name="dravingLicence" value="yes">
				<label for="yes">Tak</label>
			</div>
		</div>

		<div class="row">
			<div class="form">
				<label for="voivodeship">Województwo</label>
			</div>
			<div class="input">
				<input type="text" id="voivodeship" name="voivodeship">
			</div>
		</div>
		
		<div class="row">
			<div class="form">
				<label for="comments">Uwagi</label>
			</div>
			<div class="input">
				<input type="text" id="comments" name="comments" style="height:5em;">
			</div>
		</div>
		
		<div class="row">
			<div class="form">
				<label for="dateofBirth">Data Urodzenia</label>
			</div>
			<div class="input">
				<input type="text" id="dateofBirth" name="dateofBirth" placeholder="dd.mm.rrrr">
			</div>
		</div>
		
		<div class="row">
			<div class="form">
				<label for="phoneNumber">Numer Telefonu</label>
			</div>
			<div class="input">
				<input type="text" id="phoneNumber" name="phoneNumber" placeholder="123-456-789">
			</div>
		</div>

		</form>
	</div>
</body>
</html>