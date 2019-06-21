<?php
ob_start();
session_start();

$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];


if($kadi == "ad.soyad" && $sifre == "12345")  {
    header("Location:admin.php");
}
else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}

ob_end_flush();
?>