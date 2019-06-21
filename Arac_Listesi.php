<html>

<head>
<meta charset="utf-8">
<title>Araç Listesi</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body><h3>
<a href=arac_giriş.php>Araç Giriş</a>
<a href=Arac_listesi.php>Araç Listesi</a>
<a href=logout.php>Guvenli cikis</a></center>
</h3>
<table border="1"><tr><td colspan="8" align="left">Araç Listesi</td></tr>
<tr>
<td>Plaka_num</td>
<td>Birim_Adı</td>
<td>Marka</td>
<td>Model</td>
<td>Model_Yıl</td>
<td>Cesit</td>
<td>Tur</td>
<td>Arac_Durum</td>
</tr>
<?php
$servername = "localhost";
$databaseName = "arac_plaka";
$uid = "sa";
$pwd = "12345";

$baglan=mysqli_connect("localhost","sa","12345","arac_plaka");
$sonuc=mysqli_query($baglan,"select * from tbl_Plaka");
mysqli_set_charset($baglan, "utf8");

while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo '<td>'.$satir['Plaka_No'].'</td>';
echo '<td>'.$satir['Birim_Adi'].'</td>';
echo '<td>'.$satir['Marka'].'</td>';
echo '<td>'.$satir['Model'].'</td>';
echo '<td>'.$satir['Model_Yil'].'</td>';
echo '<td>'.$satir['Cesit'].'</td>';
echo '<td>'.$satir['Tur'].'</td>';
echo '<td>'.$satir['Arac_Durum'].'</td>';
echo '</tr>';
}
?>
</table>
</body>
</html>

