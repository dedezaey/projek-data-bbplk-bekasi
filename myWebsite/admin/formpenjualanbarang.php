<h2 align="center" style="margin-top: 50px;">Form penjualan barang</h2>
<form action="proses1.php" method="post" style="padding-right: 100px; padding-left: 100px;">
	<select class="form-control" name="nama_barang" id="nama_barang" style="margin-top: 30px;">
		<option value="">Nama Barang</option>
		<option value="Transistor">Transistor</option>
		<option value="Dioda">Dioda</option>
		<option value="Resistor">Resistor</option>
		<option value="Capasitor">Capasitor</option>
		<option value="IC 555">IC 555</option>
	</select>
					<!-- <div class="form-group" style="margin-top: 30px;">
						<label for="email">Nama Barang</label>
						<input type="email" class="form-control" id="nama" placeholder="Enter name" name="nama" required="">
					</div> -->
					<!-- <select class="form-control" name="combo1" id="combo1">
						<option value="">Harga Barang</option>
						<option value="Harga Barang1">1000</option>
						<option value="Harga Barang2">4000</option>
						<option value="Harga Barang3">500</option>
						<option value="Harga Barang4">3000</option>
						<option value="Harga Barang5">10000</option>
					</select> -->
					<div class="form-group">
						<label for="hargabarang"></label>
						<input type="number" class="form-control" id="hargabarang" placeholder="Harga Barang" name="harga_barang">
					</div>
					<div class="form-group">
						<label for="jumlahbarang"></label>
						<input type="number" class="form-control" id="jumlah_barang" placeholder="jumlah Barang" name="jumlah_barang">
					</div>
					<button type="submit" class="btn btn-primary btn-lg" name="hitung">Hitung</button>
				</form>
			</div>

			<div class="col-12 col-md-4 col-lg-2 text-light pt-4" align="justify" style=" background-color: #00ace6;">

				<img src="asset/images/avatar2.png" alt="Avatar" class="avatar" width="150" height="150px">

			</div>
		</div>
	</div>