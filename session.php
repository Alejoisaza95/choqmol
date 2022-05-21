<?php
session_start();
   
if(!isset($_SESSION['User'])){
	header("location:index.php");
	}
?>