<?php
include("baglan.php");
$id = $_REQUEST['id'];

if ($_REQUEST['durum'] == 'Bekliyor') {
	$hsorgu = mysqli_query($conn, "update uyeli_sepet set durum='Bekliyor' where uye_sepet_id = '".$id."'");
} elseif ($_REQUEST['durum'] == 'Hazırlanıyor') {
	$hsorgu = mysqli_query($conn, "update uyeli_sepet set durum='Hazırlanıyor' where uye_sepet_id = '".$id."'");
} elseif ($_REQUEST['durum'] == 'Teslim Edildi') {
	$hsorgu = mysqli_query($conn, "update uyeli_sepet set durum='Teslim Edildi' where uye_sepet_id = '".$id."'");
}elseif ($_REQUEST['durum'] == 'İptal Edildi') {
	$hsorgu = mysqli_query($conn, "update uyeli_sepet set durum='İptal Edildi' where uye_sepet_id = '".$id."'");
}
?>