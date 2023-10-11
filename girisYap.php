
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
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
            <div class="girisYap">
                <h2>Giriş Yap</h2>
                <hr>
                <form action="onay.php" method="post">
                    <div class="bilgiler">
                        <label for="TCNo">TC Numaranız : </label>
                        <input type="text" name="TCNo" id="TCNo" placeholder="TC NO Giriniz">
                        
                    </div>
                    <div class="bilgiler">
                        <label for="Sifre">Şifreniz : </label>
                        <input type="password" name="Sifre" id="Sifre" placeholder="Şifrenizi Giriniz">

                    </div>
                    <button type="submit"name="girisYap">GİRİŞ YAP</button>
                </form>
                <hr>
                <p>Üye Değil Misiniz? Hemen şimdi <a href="uyeOl.php"><i>Buradan Üye Olunuz</i></a></p>
            </div>
        </div>
    </main>
    <footer>
        <p>2022-2023 &copy CÜ SAĞLIK</p>
    </footer>
</body>
</html>