<?php 
    
    include "veritabani.php";
    
    if(isset($_GET['sil'])){
        $veriSil = "DELETE FROM `randevu` WHERE `randevu`.`id` = ?";
        $sorguSil = $db->prepare($veriSil);
        $sorguSil->execute([
            $_GET['sil']
        ]);
        header("location:randevular.php?Iptal-Edildi");
    }
    include "header.php";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randevularım</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <main>
            <div class="alan2">
                <img src="saglik2.jpg" alt="Sağlığınız Bizim İçin Değerlidir">
                <div class="randevu">
                <h2>Randevularım</h2>
                <hr>
                <table border = 1 cellspacing = 0 style = "margin: 25px auto;">
                    <thead>
                        <tr>
                            <th style = "padding: 5px;">id</th>
                            <th style = "padding: 5px;">Ad Soyad</th>
                            <th style = "padding: 5px;">Hastane</th>
                            <th style = "padding: 5px;">Randevu Tarihi</th>
                            <th style = "padding: 5px;">Şikayet</th>
                            <th style = "padding: 5px;">İptal Et</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    
                    $randevuList = $db->prepare("SELECT * FROM randevu 
                    INNER JOIN kullanicilar ON randevu.Ad_Soyad = kullanicilar.Ad_Soyad WHERE TCNo=:TCNo");
                    $randevuList->execute([
                        'TCNo' => $_SESSION["userTCNo"]
                    ]);
                    while($randevuAl = $randevuList->fetch(PDO::FETCH_ASSOC)){ ?>
                        <tr style = "text-align: center;">
                            <td style = "padding: 5px;"><?php echo $randevuAl["id"]; ?></td>
                            <td style = "padding: 5px;"><?php echo $randevuAl["Ad_Soyad"]; ?></td>
                            <td style = "padding: 5px;"><?php echo $randevuAl["Hastane"]; ?></td>
                            <td style = "padding: 5px;"><?php echo $randevuAl["RandTarih"]; ?></td>
                            <td style = "padding: 5px;"><?php echo $randevuAl["Sikayet"]; ?></td>
                            <td style = "padding: 5px;"><a href = "?sil=<?=$randevuAl['id'] ?>">Sil</a></td>
                        </tr>
                    
                      <?php  }
                    
                    ?>
                    
                        
                    </tbody>
                </table>
                </div>
            </div>
        </main>
        <footer>
        <p>2022-2023 &copy CÜ SAĞLIK</p>
    </footer>
</body>
</html>