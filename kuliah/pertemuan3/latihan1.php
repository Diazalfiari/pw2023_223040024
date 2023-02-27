<?php 
    // pengulangan while
    // 1. Inisialisasi / Nilai Awal
    // 2.Kondisi Terminasi / Kapan pengulangannya
    // 3. Increment / decrement
    $nilai_awal = 3; //inisialisasi
    while ($nilai_awal >= 1){ //kondisi terminasi
    echo "Hello World $nilai_awal x<br>";
    $nilai_awal--; //decrement (++)increment
}
?>

<?php 
$nilai_awal = 1; //inisialisasi
while ($nilai_awal <= 10){ //kondisi terminasi
echo "Angkot no.$nilai_awal beroperasi dengan baik.<br>";
$nilai_awal++;
}
?>


<!-- for  -->

<?php 
echo " <hr> ";
//for
for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
    echo "Hello World $nilai_awal x <br> ";
}
?>