<?php 
require_once "koneksi.php"

?>





<!-- conten -->




<div class="container col-12col-md-8 col-lg-10">

  <h2 align="center"></h2>

  <form action="aset/inser.php" method="POST" class="form-inline">

   <label for="fname">id pelanggan</label>
   <input type="text" class="form-control ml-auto text-center w-100"  name="namaUser" placeholder="id pelanggan">

   <label for="fname">tanggal</label>
   <input type="text" class="form-control ml-auto text-center w-100"  name="namaUser" placeholder="<?php echo date('l, d-m-Y'); ?>" readonly>

   <label for="fname">user name</label>
   <input type="text" class="form-control ml-auto text-center w-100"  name="namaUser" placeholder="Nama lengkap . .">

   <label for="lname">id pelanggan</label>
   <input type="email"  name="emailUser" placeholder="alamat email" style="width: 20%; margin-right: 10px;"><input type="email"  name="emailUser" placeholder="alamat email" style="width: 55%; margin-right: 10px ">

   <input type="email"  name="emailUser" placeholder="alamat email" style="width: 20%; margin-right: 10px;">
   <input type="email"  name="emailUser" placeholder="alamat email" style="width: 25%; margin-right: 10px; ">
   <input type="email"  name="emailUser" placeholder="alamat email" style="width: 25%;margin-right: 10px; ">
   

   <input  type="submit" value="Kirim">

 </form>

 <!-- tabel data -->

 <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th>no</th>
      <th>id barang</th>
      <th>nama barang</th>
      <th>satuan barang</th>
      <th>harga barang</th>
      <th>jumlah beli</th>
      <th>batal </th>
      <th>ubah</th>
    </tr>
  </thead>
  <tbody>


    <tr>
      <td></td>
      <td></td>
      <td></td>

      <td>
        <a>delate</a>
        <a>
        update</a>
      </td>
    </tr>

  </tbody>
</table>
</tbody>

</table>

<!-- Button trigger modal -->


</div>
</div>



</div>
</div>
