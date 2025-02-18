<?php
include('baglan.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcıdan gelen kodu al
    $sifre = $_POST['sifre'];
    $tsifre = $_POST['tsifre'];

    $sorgu = mysqli_query($conn, "select * from uyeler where sifresıfırlamaistek = '1'");
    $doldur = mysqli_fetch_array($sorgu);
    // Doğru Eposta
    if ($tsifre == $sifre) {
        $ysifre = mysqli_query($conn, "update uyeler set uye_sifre='".$sifre."' where uye_id='".$doldur['uye_id']."'");
        $yistek = mysqli_query($conn, "update uyeler set sifresıfırlamaistek='0' where uye_id='".$doldur['uye_id']."'");
        echo "Şifre Değiştirildi...";
        sleep(3);
    } else {
        echo "Şifreler Aynı Değil!..";
    }


}
?>
