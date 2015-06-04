<?php 
require_once('core/init.php');
require_once('template/header.php');

if(isset($_GET['id'])) {

	$id = $_GET['id'];

	if(hapusData($id)) {
		header('Location: index.php');
	}else{
		echo 'hapus data gagal';
	}
echo 'hai';
}

 ?>