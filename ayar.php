<?php
    $servername = "localhost";
    $uid = "sa";
    $pwd = "12345";
    $databaseName = "arac_plaka";
    $port = "3306";
    /* Connect using SQL Server Authentication. */
    $conn = mysqli_connect($servername,$uid, $pwd,$databaseName,$port);
    $sql ="SELECT Plaka_num,Birim_Adı , Marka, Model , Model_Yıl , Cesit , Tur , Arac_Durum FROM tbl_Plaka";

    mysqli_set_charset('latin5',$conn);
?>