<html>
<head>
    <title>Yeni Araç Girişi</title>
</head>
<body>
<h3>
<a href=arac_giriş.php>Araç Giriş</a>
<a href=Arac_listesi.php>Araç Listesi</a>
<a href=logout.php>Guvenli cikis</a></center>
</h3>
<form method="POST" action="ayar1.php">
<table  align="center"><td colspan="2" align="left"><h2>Araç Bilgileri</h2></td>
<tr><td>
<table align="center">
<tr>
</tr>
<tr>
<td>Plaka Numarası</td>
<td><input type="text" name="Plaka_num"></td>
<td>Model</td>
<td><input type="text" name="Model"></td>
</tr>
<tr>
<td>Birim Adı</td>
<td><input type="text" name="Birim_Adi"></td>
<td>Model Yılı</td>
<td><input type="text" name="Model_Yil"></td>
</tr>
<tr>
<td>Marka</td>
<td><input type="text" name="Marka"></td>
</tr>
</table>
</td>
<td>
<table align="right">
<tr>
<td>Çesit</td><form  method="GET" action="ayar1.php"><p>
<td><input type="radio" name="Cesit" value="Oznel">Öznel</td>
<td><input type="radio" name="Cesit" value="Kiralik">Kiralık</td>
</p>
</form>
</tr>
<tr>
<td>Tür</td><form  method="GET" action="ayar1.php"><p>
<td><input type="radio" name="Tur" value="Havuz_Aracı">Havuz Aracı</td>
<td><input type="radio" name="Tur" value="Saha_Aracı">Saha Aracı</td>
</p></form>
</tr>
<tr>
<td>Arac Durumu</td><form  method="GET" action="ayar1.php"><p>
<td><input type="radio" name="Arac_Durum" value="Faal">Faal</td>
<td><input type="radio" name="Arac_Durum" value="Faal_Degil">Faal Değil</td>
</p></form>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Kaydet"></td>
</tr>
</table>
</td>
</tr>
</table>
</form>
</body>
</html>