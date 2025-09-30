<?php
$a = 10;
$b = 5;

$hasiTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesarSamaDengan = $a >= $b;
$hasilLebihKecilSamaDengan = $a <= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "Hasil Penjumlahan: $a + $b = $hasiTambah <br>";
echo "Hasil Pengurangan: $a - $b = $hasilKurang <br>";
echo "Hasil Perkalian: $a * $b = $hasilKali <br>";
echo "Hasil Pembagian: $a / $b = $hasilBagi <br>";
echo "Hasil Sisa Bagi: $a % $b = $sisaBagi <br>";
echo "Hasil Pangkat: $a ** $b = $pangkat <br>";

echo "<br>";

echo "Hasil Sama: $a == $b : $hasilSama <br>";
echo "Hasil Tidak Sama: $a != $b : $hasilTidakSama <br>";
echo "Hasil Lebih Besar: $a > $b : $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil: $a < $b : $hasilLebihKecil <br>";
echo "Hasil Lebih Besar Sama Dengan: $a >= $b : $hasilLebihBesarSamaDengan <br>";
echo "Hasil Lebih Kecil Sama Dengan: $a <= $b : $hasilLebihKecilSamaDengan <br>";

echo "<br>";

echo "Hasil AND: $a && $b : $hasilAnd <br>";
echo "Hasil OR: $a || $b : $hasilOr <br>";
echo "Hasil NOT A: !$a : $hasilNotA <br>";
echo "Hasil NOT B: !$b : $hasilNotB <br>";

echo "<br>";

echo "Hasil A setelah penugasan: $a <br>";
?>