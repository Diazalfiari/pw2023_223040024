<?php 

function menentukan_ganjil_genap($angka, $nama = "admin")
{
if($angka % 2 == 1) {
    return "$angka $nama adalah bilangan GANJIL!";
}else {
    return "$angka $nama adalah bilangan GENAP!";
}
}
echo menentukan_ganjil_genap(11, "Diaz"); //argument
echo "<br>";
echo menentukan_ganjil_genap(100);
?>