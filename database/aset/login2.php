<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Halaman Login </h3>
	<form action="datalogin.php" method="post" onSubmit="return validasi()">		
		<table >
			<tr>
				<td>Email User</td>
				<td><input type="text" name="emailUser" id="emailUser"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="passwordUser" id="passwordUser"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>