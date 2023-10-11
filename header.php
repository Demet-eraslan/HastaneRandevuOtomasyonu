<?php 

ob_start();
session_start();

include "veritabani.php";

$kullaniciKontrol=$db->prepare("SELECT * FROM kullanicilar WHERE TCNo=:TCNo");
$kullaniciKontrol->execute([
    'TCNo' => $_SESSION['userTCNo']
]);

$artirma = $kullaniciKontrol->rowCount();
$aktifKullanici = $kullaniciKontrol->fetch(PDO::FETCH_ASSOC);

if($artirma == 0){
    header('location:girisYap.php?Yetkisiz-giris');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoş Geldiniz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<div class="container">
            <div class="baslik">
                <a href="anasayfa.php">
                    <img src="saglik.jpg" alt="saglik">
                </a>
            </div>
            <div class="metin">
                <h1>SAĞLIĞINIZ BİZİM İÇİN DEĞERLİDİR</h1>
            </div>
            <div class="butonlar kullanici">
            <a href="randevual.php">RANDEVU AL</a>
                <a href="profil.php">HESABI GÖSTER</a>
                <a href="randevular.php">RANDEVULARIM</a>
                <a href="cikis.php">ÇIKIŞ YAP</a>
            </div>
        </div>
        </header>
</body>
</html>