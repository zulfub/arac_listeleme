<html>
<head> <meta charset="utf-8"> </head>
<body>
<?php
$Plaka_num = $_POST['Plaka_num'];
$Birim_Adi = $_POST['Birim_Adi'];
$Marka = $_POST['Marka'];
$Model = $_POST['Model'];
$Model_Yil = $_POST['Model_Yil'];
$Cesit= $_GET['Cesit'];
$Tur = $_GET['Tur'];
$Arac_Durum = $_POST['Arac_Durum'];

$baglan=mysqli_connect("localhost","sa","12345","arac_plaka");
mysqli_set_charset($baglan, "utf8");

$sqlekle="INSERT INTO tbl_Plaka( Plaka_No,Birim_Adi , Marka, Model , Model_Yil , Cesit , Tur , Arac_Durum) 
VALUES ('$Plaka_num','$Birim_Adi','$Marka','$Model','$Model_Yil','$Cesit','$Tur','$Arac_Durum')";

$sonuc=mysqli_query($baglan,$sqlekle,True);

    if ($sonuc==0)
        echo "Eklenemedi, kontrol ediniz";
    else
        echo "Başarıyla eklendi";

?>
<table><tr><h1>
<td><a href=arac_giriş.php>Yeniden Dene</a></td>
<td><a href=Arac_Listesi.php>Araç Listesi</a></td>
<td><a href=logout.php>Guvenli cikis</a></td>
</h1></tr>
</table></table>
</body>
</html>

