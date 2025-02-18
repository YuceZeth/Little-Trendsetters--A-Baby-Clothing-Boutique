<?php
$conn = mysqli_connect("localhost","root","","cakil_bebek");
if ( mysqli_connect_errno() ) {
	echo "Bağlantı Başarısız. Hata : ".mysqli_connect_error();
	die();
}
else {
//	echo "Bağlantı Başarılı";
}
	mysqli_query($conn,"SET NAMES 'utf8'");
?>