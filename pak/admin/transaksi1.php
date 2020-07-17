<?php 
require_once "koneksi.php"

?>





<!-- conten -->




<div class="container-fluid col-12col-md-8 col-lg-10">
  <div class="cntainer" >

    <h3 class="text-center mb-5">FORM INPUT DATA TRANSAKSI</h3> 
    <form action="aset/ProsesInsertTransaksi.php" id="form1" method="POST">
     <div class="form-group row"> 
      <label class="control-label col-sm-3">No Transaksi :</label> 

      <div class="col-sm-9">
       <input type="text" name="noTransaksi" class="form-control" id="no-transaksi" placeholder="Masukkan Nomer Transaksi " onkeyup="validasiTransaksi()" onclick="validasiTransaksi()" data-toggle="tooltip" title="Isi keranjang belanjaan dahulu"data-placement="left"> 
     </div> 
   </div> 
   <div class="form-group row"> 
    <label class="control-label col-sm-3">Tanggal :</label> 
    <div class="col-sm-9"> 
      <input type="date" name="tanggalTransaksi" class="form-control" id="tanggal-transaksi" value="<?php echo date('Y-m -j');?>" readonly> 
    </div> 
  </div> 
  <div class="form-group row"> 
    <label class="control-label col-sm-3">ID User(Kasir) / Nama User(Kasir)</label> 
    <div class="col-sm-2"> 
      <input type="text" name="idUser" class="form-control" id="id-user" value="2" readonly> 
    </div> 
    <div class="col-sm-7"> 
      <input type="text" name="namaUser" class="form-control" id="nama-user" value="Zulka Ali" readonly> 
    </div> 
  </div> 
  <hr> 
  <div class="row">
   <div class="col-sm-3"> 
    <select onchange="getDataBarang()" class="form-control" id="id-barang" name="idBarang"> 
      <option value="" disabled selected>Pilih Barang -->
      </option> 
      <?php require_once 'koneksi.php'; $sql = "SELECT*FROM tb_barang"; $result = $conn->query($sql); while ($row = $result->fetch_assoc()) { ?> 
        <option value="<?= $row['id_barang']; ?>"> <?= $row['id_barang'] . "-" . $row['nama_barang']; ?> 
      </option> 
    <?php }; ?> 
  </select> 
</div> 
<div class="col-sm-2"> 
  <input type="number" name="hargaBarang" class="form-control" id="harga-barang" readonly> 
</div> 
<div class="col-sm-2"> 
  <input type="text" name="satuanBarang" class="form-control" id="satuan-barang" readonly> 
</div> 
<div class="col-sm-2"> 
  <input type="number" min="1" name="jumlahBeli" class="form-control" id="jumlah-beli" disabled> 
</div> 
<div class="col-sm-3"> 
  <input type="submit" name="submitTemp" class="form-control btn btn-success" id="submit-temp" value="Tambah" disabl ed> 
</div> 
</div>

</div>
</div>
