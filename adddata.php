<?php 

$db = mysqli('localhost', 'root', 'root', 'crud');

if($db->connect_errno) {
	echo 'error' . $db->connect_error;
}

$query = $db->prepare("INSERT INTO user (nama,password) VALUES (?,?)");

$query->bind_param('ss', $name, $password);


$nama = "Levanya";
$password = "zanki4";
$query->execute();

$nama = "Doni";
$password = "karalo";
$query->execute();



if($db->query($query)) {
	echo 'berhasil';
}else {
	echo 'gagal insert' . $db->error;
}


echo "hai";

 ?>