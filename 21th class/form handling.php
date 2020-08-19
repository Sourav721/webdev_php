<?php

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    if(empty($email)){
        echo "Enter your email";
    }
    else {
        echo $email;
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>form</h1>
	<form method = "POST" action="?">
	<label for="FN">First Name:</label><br>
	<input type="text" id="FN" name="username"/><br>
	
	<label for="SN"> Second Name:</label><br>
	<input type="text" id="SN" name="username"/><br>
	
	<label for="E">Email:</label><br>
	<input type="email" id="E" placeholder="eamil" name="email"/><br>
	<label for="p">password:</label><br>
	<input type="password"id="p" placeholder="pass" name="password" />
	<br><br>
	<input type="file"id="f" multiple />
<br><br>
	<input type="submit" value="creat account" name ="submit" />
	<h1>Select Gender</h1>
	<input type="radio" id="male" name="gender"/>
	<label for="male">Male</label>
	<input type="radio" id="female" name="gender"/>
	<label for="female">FeMale</label>
	</form>
</body>
</html>
