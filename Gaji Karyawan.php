<center>
<link rel="stylesheet" type="text/css" href="Style.css">
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
$nama =$_POST['nama'];
$jamlembur =$_POST['jamlembur'];
$gajipokok =$_POST['golongan'];
$uangtransport =250000;
$tunjangan = $jamlembur*15000;
$totalgaji = $gajipokok+$tunjangan-$uangtransport;


echo "<font color='white'</font>"."Nama Karyawan : ".$nama."<br>";
echo "Tunjangan : ".$tunjangan."<br>";
echo "Uang Transport/Bulan: ".$uangtransport."<br>";
echo "========================================== <br>";
echo "Total Gaji : ".$totalgaji."<br>";
?>
</center>