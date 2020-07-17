<?php 
session_start();
	//logout
session_destroy();
	//arahkan ke ahalaman index.php
header("location: index.php?p=FormLogin");

?>