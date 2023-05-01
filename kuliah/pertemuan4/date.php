<?php 
//l menampilkan hari
//d untuk tanggal
//M untuk bulan (jul)
//m bulan bentuk angka
    echo date("l, d-M-Y");
?>
<br>
<br>
<hr>
<?php 
//time
//UNIX Timestamp / EPOCH time
    echo time();
?>
<br>
<br>
<hr>
<?php 

    echo date("l", time()+60*60*60*24*2);
?>
<br>
<br>
<hr>
<?php 
//mktime
//membuat sendiri detik
//mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
    echo date("l", mktime(0,0,0,5,07,2003));
?>
<br>
<br>
<hr>
<?php 
//strtotime
echo date("l", strtotime("25 aug 1985"));

?>
