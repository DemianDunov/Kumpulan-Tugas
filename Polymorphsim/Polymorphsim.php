<?php
class Produk {
    public $merek;
    public $stok;

    public function __construct($merek, $stok) {
        $this->merek = $merek;
        $this->stok = $stok;
    }
    public function cekStok() {
        return "Stok saat ini: " . $this->stok;
    }
}

class Televisi extends Produk {
    public $jenis;
    public function __construct($merek, $stok, $jenis) {
        parent::__construct($merek, $stok);
        $this->jenis = $jenis;
    }
    public function cekStokTelevisi() {
        return "Jenis: " . $this->jenis . ", " . $this->cekStok() . "<br>";
    }
}

$produk01 = new Televisi("Samsung", 30, "LED");
echo $produk01->cekStokTelevisi();

#2
class Kendaraan {
    public $merk;
    public $tahunProduksi;

    public function __construct($merk, $tahunProduksi) {
        $this->merk = $merk;
        $this->tahunProduksi = $tahunProduksi;
    }
    public function infoKendaraan() {
        return "Merk: " . $this->merk . ", Tahun Produksi: " . $this->tahunProduksi;
    }
}

class Mobil extends Kendaraan {
    public $jenis;

    public function __construct($merk, $tahunProduksi, $jenis) {
        parent::__construct($merk, $tahunProduksi);
        $this->jenis = $jenis;
    }
    public function infoMobil() {
        return "Jenis: " . $this->jenis . ", " . $this->infoKendaraan() . "<br>";
    }
}

// Contoh penggunaan
$mobil1 = new Mobil("Toyota", 2020, "Sedan");
echo $mobil1->infoMobil();

#3
class Hewan {
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }
    public function infoHewan() {
        return "Nama: " . $this->nama . ", Jenis: " . $this->jenis;
    }
}

class Kucing extends Hewan {
    public $warnaBulu;

    public function __construct($nama, $jenis, $warnaBulu) {
        parent::__construct($nama, $jenis);
        $this->warnaBulu = $warnaBulu;
    }
    public function infoKucing() {
        return "Warna Bulu: " . $this->warnaBulu . ", " . $this->infoHewan();
    }
}

// Contoh penggunaan
$kucing1 = new Kucing("Whiskers", "Persia", "Coklat");
echo $kucing1->infoKucing();

?>
