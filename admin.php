<?php 

include("ayar.php");
ob_start();
session_start();

if(!isset($_SESSION["login"])){
    header("Location:Arac_Listesi.php");
}
else {
    echo "<center>Admin sayfasina hosgeldiniz..! ";
	echo "<a href=logout.php>Guvenli cikis</a></center>";
}
?>
