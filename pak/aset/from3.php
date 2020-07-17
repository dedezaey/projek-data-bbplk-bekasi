<?php 
require_once "koneksi.php"

?>





<!-- conten -->




<div class="container col-12col-md-8 col-lg-10">

  <h1>DAFTAR admin</h1>
  <p>isi data diri anda dengan benar</p>

  <form action="aset/inser.php" method="POST">

   <label for="fname">user name</label>
   <input type="text"  name="namaUser" placeholder="Nama lengkap . .">

   <label for="lname">E-mail</label>
   <input type="email"  name="emailUser" placeholder="alamat email" style="width: 100%;">

   <label for="lname">password</label>
   <input type="password"  name="passwordUser" placeholder="masukan password">

   <input  type="submit" value="Kirim">

 </form>

 <!-- tabel data -->

</div>
</div>


