<?php
// Function untuk menampilkan angka ganjil
function tampilkan_angka_ganjil($angka_awal, $angka_akhir) {
    for ($i = $angka_awal; $i <= $angka_akhir; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
}

// Function untuk menampilkan angka genap
function tampilkan_angka_genap($angka_awal, $angka_akhir) {
    for ($i = $angka_awal; $i <= $angka_akhir; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

// Function untuk menghitung operasi aritmatika
function hitung_aritmatika($angka1, $angka2, $operasi) {
    switch ($operasi) {
        case 'Tambah':
            return $angka1 + $angka2;
            break;
        case 'Kurang':
            return $angka1 - $angka2;
            break;
        case 'Bagi':
            if ($angka2 != 0) {
                return $angka1 / $angka2;
            } else {
                return "Error: Pembagian dengan nol";
            }
            break;
        case 'Kali':
            return $angka1 * $angka2;
            break;
        default:
            return "Error: Operasi aritmatika tidak valid";
            break;
    }
}

// Contoh pemanggilan fungsi
echo "Angka Ganjil dari 1 hingga 10: ";
tampilkan_angka_ganjil(1, 10);
echo "<br>";

echo "Angka Genap dari 1 hingga 10: ";
tampilkan_angka_genap(1, 10);
echo "<br>";

echo "Hasil 5 + 3 = " . hitung_aritmatika(5, 3, 'Tambah') . "<br>";
echo "Hasil 10 - 2 = " . hitung_aritmatika(10, 2, 'Kurang') . "<br>";
echo "Hasil 6 / 2 = " . hitung_aritmatika(6, 2, 'Bagi') . "<br>";
echo "Hasil 4 * 7 = " . hitung_aritmatika(4, 7, 'Kali') . "<br>";

?>
