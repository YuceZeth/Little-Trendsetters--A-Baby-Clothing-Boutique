<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include('baglan.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcıdan gelen kodu al
    $Eposta = $_POST['eposta'];

    // Doğru Eposta
    $say = 0;
    $sorgu = mysqli_query($conn, "select * from uyeler");
    while ($dbeposta = mysqli_fetch_array($sorgu)) {
      if ($Eposta == $dbeposta['uye_mail']) {
        $say = $say + 1;
      }
    }
    if ($say > 0) {
      $ssorgu = mysqli_query($conn, "select * from uyeler where uye_mail = '".$Eposta."'");
      $doldur = mysqli_fetch_array($ssorgu);
      $isim = $doldur['uye_adsoyad'];
      $id = $doldur['uye_id'];
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
       // $mail->SMTPDebug = 2;
        $mail->CharSet = 'UTF-8';                                 
        $mail->isSMTP();                                      
        $mail->Host = 'smtp-mail.outlook.com';                       
        $mail->SMTPAuth = true;                               
        $mail->Username = 'cakilbebekk@hotmail.com';                 
        $mail->Password = 'cakil123bebek';                         
        $mail->SMTPSecure = 'tls';                            
        $mail->Port = 587;                                   

        //Recipients
        $mail->setFrom('cakilbebekk@hotmail.com', 'Cakil Bebek');
        $mail->addAddress($Eposta, $isim);     

        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = 'Şifre Sıfırlama';
        $mail->Body    = "<br> Şifre Yenileme Linki : <a href='http://localhost/Seda/yenisifre.php?sayfa=sifre_sifirlama&id=".hash('sha256', rand(1,1000)).$id.hash('sha256', rand(1,1000))."'>Sıfırlama Linki </a>";

        $mail->send();
        echo 'Mail Gönderildi. Maili Görmediyseniz Gereksiz Veya Junk Kutusuna Bakınız.<br> Uyarı: Gereksizlerdeyse Linke Tıklamak İiçin Gereksizden Çıkarmanız Gerekir';
        $istek = mysqli_query($conn, "update uyeler set sifresıfırlamaistek='1' where uye_id='".$id."' ");
    } catch (Exception $e) {
        echo 'Mail gönderilemedi. Hata: ', $mail->ErrorInfo;
    }
    ?>
    <?php
      $say = 0;
    } else {
        echo "Yanlış Eposta.";
    }
}
?>
