<?php 

    include "header.php";

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

        <main>
        <div class="alan2">
            <img src="saglik2.jpg" alt="Sağlığınız Bizim İçin Değerlidir">
            <div class="randevu">
            <h2>Randevu Al</h2>
                <hr>
                <h2 style = "font-size: 16px;margin: 20px; font-family: arial;">Sayın <span style = "color: red;"><?php echo $aktifKullanici["Ad_Soyad"]?>,
            <br></span> Randevu Alacağınız Yeri Bize Bildiriniz</h2>
                <form action="onay.php" method="post">

                <div class="bilgiler">
                    <label for="Ad_Soyad">Ad Soyad : </label>
                    <input type="text" name="Ad_Soyad" id="Ad_Soyad" value="<?php echo $aktifKullanici["Ad_Soyad"]?>">
                </div>

                <div class="bilgiler">
                
                    <label for="Hastane">Randevu Yeriniz : </label>
                    <select name="Hastane" id="Hastane"style="
                        height: 30px;
                        width: 200px;
                        border: none;
                        outline: none;
                        text-align: center;
                        border-radius: 5px;
                        box-shadow: 2px 2px 4px 2px rgba(0,0,0,0.125) inset, 2px 2px 4px 2px rgba(0,0,0,0.125);
                        ">
                        <option value="">Seçiniz</option>
                        <option value="Numune Hastanesi">Numune Hastanesi</option>
                        <option value="Üniversite Hastanesi">Üniversite Hastanesi</option>
                        <option value="Dvlet Hastanesi">Dvlet Hastanesi</option>
                        <option value="Özel Hastane">Özel Hastane</option>
                    </select>
                </div>

                <div class="bilgiler">
                    <label for="RandTarih">Randevu Tarihi : </label>
                    <input type="date" name="RandTarih" id="RandTarih">
                </div>
                <br><br><hr><br><br>
                <div class="bligiler" style = "text-align: center;">
                    <label for="Sikayet">Şikayetiniz</label> <br>
                    <textarea name="Sikayet" id="Sikayet" cols="30" rows="10" 
                    style = "
                    border: 1px solid rgba(0,0,0,0.5);
                    font-size: 18px;"></textarea>
                </div>
                <button type="submit" name="randevuAl">RANDEVU AL</button>
                </form>
            </div>
        </div>
        </main>
        <footer>
        <p>2022-2023 &copy CÜ SAĞLIK</p>
    </footer>
</body>
</html>