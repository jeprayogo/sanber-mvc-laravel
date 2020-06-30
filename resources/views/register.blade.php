<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Buat Account Baru!</h1>
    <form action="{{ url('welcome') }}" method="post" accept-charset="utf-8">
        @csrf
		<h3>Sign Up Form</h3>
		
		<label for="firstname">First Name: </label><br>
		<input type="text" name="firstname" id="firstname"><br><br>

		<label for="lastname">Last Name: </label></br>
		<input type="text" name="lastname" id="lastname"><br><br>

		<label>Gender: </label><br>
		<label><input type="radio" name="male" id="male" value="male">Male</label><br>
		<label><input type="radio" name="female" id="female" value="female">Female</label><br>
		<label><input type="radio" name="other" id="other" value="other">Other</label><br><br>

		<label for="nation">Nationality: </label><br>
		
		<select name="nation" id="nation">
			<option value="id">Indonesian</option>
			<option value="sg">Singaporean</option>
			<option value="my">Malaysian</option>
			<option value="aus">Australian</option>
		</select> <br><br>

		<label for="languange">Language Spoken: </label><br>
		<label><input type="checkbox" name="bahasa" id="bahasa" value="indonesia">Bahasa Indonesia</label><br>
		<label><input type="checkbox" name="english" value="english">English</label><br>
		<label><input type="checkbox" name="other" value="other">Other</label><br><br>

		<label for="bio">Bio: </label><br>
		<textarea name="bio" id="bio"></textarea> <br>

		<input type="submit" name="submit" value="Sign Up">
	</form>
</body>
</html>