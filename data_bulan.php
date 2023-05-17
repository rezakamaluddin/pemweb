<html>
    <head>
        <title>
        BULAN SAAT INI
        </title>
    </head>
    <body>
    <?php
$angkaBln = date("n"); 
switch($angkaBln) 
{ 
    case 1 : $namaBln = "Januari"; $hari=31;
    break; 

    case 2 : $namaBln = "Pebruari"; $hari=28;
    break; 

    case 3 : $namaBln = "Maret"; $hari=31;
    break; 

    case 4 : $namaBln = "April";$hari=30;
    break; 

    case 5 : $namaBln = "Mei";$hari=31;
    break; 

    case 6 : $namaBln = "Juni"; $hari=30;
    break; 

    case 7 : $namaBln = "Juli"; $hari=31;
    break; 

    case 8 : $namaBln = "Agustus"; $hari=31;
    break; 

    case 9 : $namaBln = "September";$hari =30;
    break; 

    case 10: $namaBln = "Oktober"; $hari=31;
    break; 

    case 11: $namaBln = "Nopember"; $hari=30; 
    break; 

    case 12: $namaBln = "Desember";$hari=31;
    break; 
}
    echo "Sekarang bulan <h1>$namaBln</h1> dengan jumlah hari <h1>$hari hari</h1><h1></h1>";
    ?>
    </body>
</html>