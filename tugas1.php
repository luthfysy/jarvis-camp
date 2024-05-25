<?php
class Kendaraan {
    public $jenis;
    public $warna;

    public function __construct($jenis, $warna) {
        $this->jenis = $jenis;
        $this->warna = $warna;
    }

    public function deskripsi() {
        return "Kendaraan ini adalah {$this->jenis} berwarna {$this->warna}.";
    }
}

$mobil = new Kendaraan("Mobil", "Merah");
echo $mobil->deskripsi();
?>
