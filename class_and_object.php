<?php
class Buah {
    public $nama;
    public $warna;
    public $rasa;

    public function jatuh() {
        echo "$this->nama jatuh <br>";
    }
}

class Mobil {
    public $merk;
    public $warna;

    public function berjalan() {
        echo "$this->merk berjalan <br>";
    }
    public function mengerem() {
        echo "$this->merk mengerem <br>";
    }
}


$apel = new Buah();
$apel->nama = "Apel";
$apel->warna = "Merah";
$apel->rasa = "Manis";
$apel->jatuh();

echo "<br>"; 


$toyota = new Mobil();
$toyota->merk = "Toyota";
$toyota->warna = "Silver";
$toyota->berjalan();
$toyota->mengerem();

echo "<br>"; 
echo "Mobil $toyota->merk berwarna $toyota->warna";
echo "<br>";
?>
