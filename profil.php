<?php 

    include "header.php";
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>

        <main>
        <div class="alan2">
            <img src="saglik2.jpg" alt="Sağlığınız Bizim İçin Değerlidir">
            <div class="uyeOl">
                <h2>HESAP BİLGİLERİM</h2>
                <hr>
                <form>
                    <div class="bilgiler">
                        <label for="Ad_Soyad">Ad Soyad : </label>
                        <input type="text" name="Ad_Soyad" id="Ad_Soyad" disabled style="background: #fdd;" value = "<?php echo $aktifKullanici["Ad_Soyad"]?>">
                    </div>
                    <div class="bilgiler">
                        <label for="Cinsiyet">Cinsiyet : </label>
                        <input type="text" name="Cinsiyet" id="Cinsiyet" disabled style="background: #fdd;" value = "<?php echo $aktifKullanici["Cinsiyet"]?>">
                        
                    </div>
                    <div class="bilgiler">
                        <label for="Sifre">Şifre : </label>
                        <input type="password" name="Sifre" id="Sifre" disabled style="background: #fdd;"  value = "<?php echo $aktifKullanici["Sifre"]?>">
                        
                    </div>
                    <div class="bilgiler">
                        <label for="ePosta">E-Posta : </label>
                        <input type="email" name="ePosta" id="ePosta" disabled style="background: #fdd;"  value = "<?php echo $aktifKullanici["ePosta"]?>">

                    </div>
                    <div class="bilgiler">
                        <label for="DTarih">Doğum Tarihi : </label>
                        <input type="date" name="DTarih" id="DTarih" disabled style="background: #fdd;" value = "<?php echo $aktifKullanici["DTarih"]?>">
                        
                    </div>
                    <div class="bilgiler">
                        <label for="TCNo">TC Kimlik No : </label>
                        <input type="text" name="TCNo" id="TCNo" disabled style="background: #fdd;" value = "<?php echo $aktifKullanici["TCNo"]?>">

                    </div>
                    <div class="bilgiler">
                        <label for="telNo">Telefon No : </label>
                        <input type="text" name="telNo" id="telNo" disabled style="background: #fdd;"  value = "<?php echo $aktifKullanici["telNo"]?>">

                    </div>
                </form> </div>
        </div>
    </main>
</body>
</html>