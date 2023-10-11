
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Ol</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="container2">
            <div class="baslik">
                <a href="anasayfa.php">
                    <img src="saglik.jpg" alt="saglik">
                </a>
            </div>
            <div class="metin">
                <h1>SAĞLIĞINIZ BİZİM İÇİN DEĞERLİDİR</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="alan2">
            <img src="saglik2.jpg" alt="Sağlığınız Bizim İçin Değerlidir">
            <div class="uyeOl">
                <h2>Üye Ol</h2>
                <hr>
                <form action="onay.php" method="post">
                    <div class="bilgiler">
                        <label for="Ad_Soyad">Ad Soyad : </label>
                        <input type="text" name="Ad_Soyad" id="Ad_Soyad">
                        
                    </div>
                    <div class="bilgiler">
                        <label for="Cinsiyet">Cinsiyet : </label>
                        <select name="Cinsiyet" id="Cinsiyet" style="
                        height: 30px;
                        width: 200px;
                        border: none;
                        outline: none;
                        text-align: center;
                        border-radius: 5px;
                        box-shadow: 2px 2px 4px 2px rgba(0,0,0,0.125) inset, 2px 2px 4px 2px rgba(0,0,0,0.125);
                        ">
                            <option value="">Seçiniz</option>
                            <option value="Kız">Kız</option>
                            <option value="Erkek">Erkek</option>
                        </select>
                        
                    </div>
                    <div class="bilgiler">
                        <label for="ePosta">E-Posta : </label>
                        <input type="email" name="ePosta" id="ePosta">

                    </div>
                    <div class="bilgiler">
                        <label for="Sifre">Şifre : </label>
                        <input type="password" name="Sifre" id="Sifre">
                        
                    </div>
                    <div class="bilgiler">
                        <label for="Sifre">Şifre Tekrar : </label>
                        <input type="password" name="Sifre" id="Sifre">
                        
                    </div>
                    <div class="bilgiler">
                        <label for="DTarih">Doğum Tarihi : </label>
                        <input type="date" name="DTarih" id="DTarih">
                        
                    </div>
                    <div class="bilgiler">
                        <label for="TCNo">TC Kimlik No : </label>
                        <input type="text" name="TCNo" id="TCNo">

                    </div>
                    <div class="bilgiler">
                        <label for="telNo">Telefon No : </label>
                        <input type="text" name="telNo" id="telNo">

                    </div>
                    <button type="submit"name="uyeOl">ÜYE OL</button>
                </form>
                <hr>
                <p>Üye Misiniz? Hemen şimdi <a href="girisYap.php"><i>Buradan Giriş Yapınız</i></a></p>
            </div>
        </div>
    </main>
    <footer>
        <p>2022-2023 &copy CÜ SAĞLIK</p>
    </footer>
</body>
</html>