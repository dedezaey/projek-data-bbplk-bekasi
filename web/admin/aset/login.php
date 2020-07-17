<?php 
require_once "koneksi.php"

?>


<!-- conten -->


<div class="col-12" style="min-height:1350px; margin-top: 10px; margin-bottom: 10px; background-image: url(../../aset/background.jpg);">
	<div class="row justify-content-center mt-5">
		<div class="card">
			<div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-primary">LOGIN</span></h5></div>
			<div class="card-body">


				<h3>Halaman Login </h3>
				<form action="aset/datalogin.php" method="post" onSubmit="return validasi()">		
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


			</div>
		</div>
	</div>


</div>
