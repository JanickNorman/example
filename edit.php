<?php 
require_once('core/init.php');
require_once('template/header.php');

$result = tampil_per_id($_GET['id']);
$id = $_GET['id'];
if(isset($_POST['submit'])) {

	$data = array(
		'nama' 		=> $_POST['nama'],
		'password' 	=> $_POST['pass'],
		'umur'		=> (int) $_POST['umur']
	);

	if (editData($id, $data)) {
		header('Location: index.php');
	}else {
		echo 'edit data gagal';
	}

}

while($row = mysqli_fetch_assoc($result)) {

?>
<h3>Edit Data</h3>

 <form action="" method="post">
 	Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
 	Password: <input type="text" name="pass" value="<?php echo $row['password']; ?>"><br>
 	Umur: <input type="text" name="umur" value="<?php echo $row['umur']; ?>"><br>
 	<input type="submit" name="submit" value="Edit Data" id="edit">
 </form>

 <?php } ?>