<?php
include("baglan.php");
$id = $_REQUEST['id'];
$ad_soyad = $_REQUEST['ad_soyad'];
$telefon = $_REQUEST['telefon'];
$mail = $_REQUEST['mail'];
$sehir = $_REQUEST['sehir'];
$ilce = $_REQUEST['ilce'];
$posta_kodu = $_REQUEST['posta_kodu'];
$adres = $_REQUEST['adres'];

$hsorgu = mysqli_query($conn, "update uyeler set uye_adsoyad='".$ad_soyad."', uye_telefon='".$telefon."', uye_mail ='".$mail."',uye_sehir='".$sehir."', uye_ilce='".$ilce."', uye_posta_kodu='".$posta_kodu."', uye_adres='".$adres."'  where uye_id = '".$id."'");
header("Location:bilgidegis.php")
?>