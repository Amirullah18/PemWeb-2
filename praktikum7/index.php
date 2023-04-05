<?php

class Mobil{
    public $nama,
            $merk,
            $warna;

    public function tambahkecepatan(){

    }

    public function kurangkecepatan(){

    }

}

class produk {
    public $nama = 'ini nama',
            $jenis = 'ini jenis',
            $harga = 9999;
            const PHI =3.14;



    public function __construct($nama, $jenis, $harga) {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function Harga(){
        return self::PHI ;
    }


}

// $produk1 = new produk();
// $produk1->nama = "KAOS";
// $produk1->jenis = "CELANA";
// $produk1->tambahproperti = "ini properti baru";
// var_dump($produk1);

$produk2 = new produk("BAJU HITAM POLOS", "KAOS",15000);
echo "produk 2 : $produk2->nama, $produk2->jenis,";
echo "<br>";
echo "Harga : " . $produk2->Harga();


$produk3 = new produk("HOODIE HITAM POLOS", "JAKET",180000);
echo "<br>";
echo "<br>";

echo "produk 3 : $produk3->nama, $produk3->jenis";
echo "<br>";
echo "Harga : " . $produk3->harga();


?>