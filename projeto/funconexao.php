<?php	

function sucesso() {
	$conn = mysqli_connect("localhost", "root", "", "modelo");
	return $conn;
}
?>