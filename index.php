<?php 
require_once('core/init.php');
require_once('template/header.php');

$result = tampil();
?>

<body>
	<a href="add.php" class="btn-add">tambah data</a>
	<div class="kepala">
		<div class="col-3">Nama</div>
		<div class="col-3">Password</div>
		<div class="col-3">Umur</div>
	</div>

	</div>
	<div class="clear"></div>
		tambah lagi
	
	
	<div class="body">
	<?php while($row = mysqli_fetch_assoc($result)):?>
		<div class="col-3"><?= $row['nama'];?> </div>
		<div class="col-3"><?= $row['password'];?> </div>
		<div class="col-3"><?= $row['umur'];?> </div>
		<div class="col-3 btn-remove"><a href="delete.php?id=<?php echo $row['id']?>">Remove</a></div>
		<div class="col-3 btn-edit"><a href="edit.php?id=<?php echo $row['id']?>">Edit</a></div>
	</div>
	<?php endwhile ?>

</body>
</html>