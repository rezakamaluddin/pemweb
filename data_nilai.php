<?php


 $nama=$_REQUEST["nama"];
 $nilai=$_REQUEST["nilai"];
 $hasil= $nilai;

 echo("Nilai : ");
 echo"<b></b>";
 echo"<b>$nama<b>";
 echo("<br>");
 if ($hasil>=89)
 echo"Hasil : <b>A</b>
 <br>Keterangan : Baik Sekali";
 elseif ($hasil>=75)
 echo"Hasil : <b>B</b>
 <br>Keterangan : Baik";
 elseif ($hasil>=59)
 echo"Hasil : <b>C</b>
 <br>Keterangan : Cukup";
 elseif ($hasil>=4)
 echo"Hasil : <b>D</b>
 <br>Keterangan : Kurang";
 else
 echo"Hasil : <b>E</b>
 <br>Keterangan : Buruk";

?>