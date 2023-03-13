<?php 
//array

//membuat array

$hari = array('senin','selasa','rabu','kamis','jumat','sabtu','minggu');
$bulan = ['januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november'];
$myArray = ['Diaz', 07, false];
$binatang = ['🐈','🐨','🐄','🐕'];

//mencetak array
echo $hari[3]; //1 elemen menggunakan index
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";

//manipulasi array
//menambah elemen di akhir menggunakan index
$hari[] = 'kamis';
$hari[] = "jum'at";
print_r($hari);
echo "<br>";

//MENAMBAHKAN ELEMEN DI AKHIR MENGGUNAKAN ARRAY_PUSH()
array_push($bulan, 'desember');
print_r($bulan);
echo "<br>";

//menambahkan elemen di awal menggunakan array_unshift()
array_unshift($binatang, '🐍');
print_r($binatang);
echo "<br>";

//menghapus elemen di akhir,menggunakan array_pop()
array_pop($hari);
print_r($hari);
echo "<br>";

//menghapus elemen di awal, menggunakan array_shift()
array_shift($hari);
print_r($hari);

?>