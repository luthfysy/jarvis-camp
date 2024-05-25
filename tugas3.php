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

class Mobil extends Kendaraan {
    public $jumlahPintu;

    public function __construct($jenis, $warna, $jumlahPintu) {
        parent::__construct($jenis, $warna);
        $this->jumlahPintu = $jumlahPintu;
    }

    public function infoLengkap() {
        return "Mobil ini adalah {$this->jenis} berwarna {$this->warna} dengan {$this->jumlahPintu} pintu.";
    }
}


$mobil = new Mobil("SUV", "Biru", 5);
echo $mobil->infoLengkap();
?>
