<?php
include("baglan.php");
$id = $_REQUEST['id'];

if ($_REQUEST['durum'] == 'Bekliyor') {
	$hsorgu = mysqli_query($conn, "update uyesiz_kapida set durum='Bekliyor' where uyesiz_kapıda_odeme_id = '".$id."'");
} elseif ($_REQUEST['durum'] == 'Hazırlanıyor') {
	$hsorgu = mysqli_query($conn, "update uyesiz_kapida set durum='Hazırlanıyor' where uyesiz_kapıda_odeme_id = '".$id."'");
} elseif ($_REQUEST['durum'] == 'Teslim Edildi') {
	$hsorgu = mysqli_query($conn, "update uyesiz_kapida set durum='Teslim Edildi' where uyesiz_kapıda_odeme_id = '".$id."'");
}elseif ($_REQUEST['durum'] == 'İptal Edildi') {
	$hsorgu = mysqli_query($conn, "update uyesiz_kapida set durum='İptal Edildi' where uyesiz_kapıda_odeme_id = '".$id."'");
}

?>