<?php 
//refractor
function run($query) {
	global $link;

	if (mysqli_query($link, $query)) {
		return true;
	}
}



function tambahData($data) {

	$kunci = implode(", ", array_keys($data));

	$i = 0;
	foreach($data as $key=>$value) {

		if(!is_int($value)) {
			$nilaiArray[$i] = "'" . $value . "'";
		}else {
			$nilaiArray[$i] = $value;
		}

		$i++;
	}

	$nilai = implode(", ", $nilaiArray);

	$query = "INSERT INTO users ($kunci) VALUES
		 ($nilai)";

	return run($query);
}

function tampil() {

	global $link;

	$query = "SELECT * FROM users";
	$result = mysqli_query($link, $query);

	return $result;

}

function tampil_per_id($id) {

	global $link;

	$query = "SELECT * FROM users WHERE id = $id";
	$result = mysqli_query($link, $query);

	return $result;
}


function hapusData($id) {	

	$query = "DELETE FROM users WHERE id =  $id";

	return run($query);

} 

function editData($id, $data) {


	$kunci = implode(", ", array_keys($data));

	$i = 0;
	foreach($data as $key=>$value) {

		if(!is_int($value)) {
			$nilaiArray[$i] = $key . " = " . "'" . $value . "'";
		}else {
			$nilaiArray[$i] = $key . " = " . $value;
		}

		$i++;
	}

	$set = implode(", ", $nilaiArray);

	$query = "UPDATE users SET $set
				WHERE id = $id";

	return run($query);


}

 ?>



