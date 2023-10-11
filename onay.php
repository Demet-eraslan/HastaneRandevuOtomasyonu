<?php 

ob_start();
session_start();

include "veritabani.php";


if(isset($_POST["uyeOl"])){
    $Ad_Soyad = isset($_POST["Ad_Soyad"]) ? $_POST["Ad_Soyad"] : null;
    $Cinsiyet = isset($_POST["Cinsiyet"]) ? $_POST["Cinsiyet"] : null;
    $Sifre = isset($_POST["Sifre"]) ? $_POST["Sifre"] : null;
    $ePosta = isset($_POST["ePosta"]) ? $_POST["ePosta"] : null;
    $DTarih = isset($_POST["DTarih"]) ? $_POST["DTarih"] : null;
    $TCNo = isset($_POST["TCNo"]) ? $_POST["TCNo"] : null;
    $telNo = isset($_POST["telNo"]) ? $_POST["telNo"] : null;

    $kontrol = $db->prepare('INSERT INTO kullanicilar SET
    Ad_Soyad = ?,
    Cinsiyet = ?,
    Sifre = ?,
    ePosta = ?,
    DTarih = ?,
    TCNo = ?,
    telNo = ?
    ');
    $ekle = $kontrol->execute([
        $Ad_Soyad, $Cinsiyet, $Sifre, $ePosta, $DTarih, $TCNo, $telNo
    ]);
    if($ekle){
        header('location:girisYap.php?Kayit-Basarili');
    }else{
        $hata = $kontrol->errorInfo();
        echo 'Veritabanı hatası' .$hata[2];
    }
}

if(isset($_POST["girisYap"])){
    $TCNo = isset($_POST["TCNo"]) ? $_POST["TCNo"] : null;
    $Sifre = isset($_POST["Sifre"]) ? $_POST["Sifre"] : null;

    $kullaniciKontrol = $db->prepare("SELECT * FROM kullanicilar WHERE TCNo=:TCNo and Sifre=:Sifre");
    $kullaniciKontrol->execute([
        'TCNo'=>$TCNo,
        'Sifre'=>$Sifre
    ]);

    $artirma = $kullaniciKontrol->rowCount();
    if($artirma == 1){
        $_SESSION["userTCNo"]=$TCNo;
        header('location:randevual.php?Giris-Basarili');
        exit;
    }else{
        header('location:girisYap.php?Giris-Basarisiz');
        exit;
    }
}

if(isset($_POST["randevuAl"])){
    $Ad_Soyad = isset($_POST["Ad_Soyad"]) ? $_POST["Ad_Soyad"] : null;
    $Hastane = isset($_POST["Hastane"]) ? $_POST["Hastane"] : null;
    $RandTarih = isset($_POST["RandTarih"]) ? $_POST["RandTarih"] : null;
    $Sikayet = isset($_POST["Sikayet"]) ? $_POST["Sikayet"] : null;
}




$kontrol = $db->prepare('INSERT INTO randevu SET
    Ad_Soyad = ?,
    Hastane = ?,
    RandTarih = ?,
    Sikayet = ?
    ');
    $ekle = $kontrol->execute([
       $Ad_Soyad, $Hastane, $RandTarih, $Sikayet
    ]);
    if($ekle){
        header('location:randevular.php?Gecmis-Olsun');
    }else{
        $hata = $kontrol->errorInfo();
        echo 'Veritabanı hatası' .$hata[2];
    }
    
?>