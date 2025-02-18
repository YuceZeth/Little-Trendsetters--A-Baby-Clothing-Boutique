<?php
include("baglan.php");
$id = $_REQUEST['id'];

if ($_REQUEST['durum'] == 'Bekliyor') {
	$hsorgu = mysqli_query($conn, "update uyesiz_kredi set durum='Bekliyor' where uyesiz_kredikarti_id = '".$id."'");
} elseif ($_REQUEST['durum'] == 'Hazırlanıyor') {
	$hsorgu = mysqli_query($conn, "update uyesiz_kredi set durum='Hazırlanıyor' where uyesiz_kredikarti_id = '".$id."'");
} elseif ($_REQUEST['durum'] == 'Teslim Edildi') {
	$hsorgu = mysqli_query($conn, "update uyesiz_kredi set durum='Teslim Edildi' where uyesiz_kredikarti_id = '".$id."'");
}elseif ($_REQUEST['durum'] == 'İptal Edildi') {
	$hsorgu = mysqli_query($conn, "update uyesiz_kredi set durum='İptal Edildi' where uyesiz_kredikarti_id = '".$id."'");
}
?>