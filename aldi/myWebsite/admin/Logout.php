<?php 
session_start();
	//logout
session_unset();
session_destroy();
	//arahkan ke ahalaman index.php
echo "<script>alert('selamat anda berhasil logout')</script>";
echo"<script>window.location.assign('../index.php?p=Logout')</script>";

?>