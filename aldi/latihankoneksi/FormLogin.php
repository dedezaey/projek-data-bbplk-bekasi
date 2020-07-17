<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		body {
			background: green;
			font-family: sans-serif;
		}

		h2 {
			color: #fff;
		}

		.login {
			padding: 1em;
			margin: 2em auto;
			width: 17em;
			background: #fff;
			border-radius: 3px;
		}

		label {
			font-size: 10pt;
			color: #555;
		}

		input[type="text"],
		input[type="password"],
		textarea {
			padding: 8px;
			width: 95%;
			background: #efefef;
			border: 0;
			font-size: 10pt;
			margin: 6px 0px;
		}

		.tombol {
			background: #3498db;
			color: #fff;
			border: 0;
			padding: 5px 8px;
			margin: 20px 0px;
		}
	</style>
</head>
<body>
	<br/>
	<br/>
	<center><h2>Login Here</h2></center>	
	<br/>
	<div class="login">
		<br/>
		<form action="prosesInputLogin.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Email:</label>
				<input type="text" name="emailUser" id="emailUser">
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="passwordUser" id="passwordUser" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>

</script>
</html>