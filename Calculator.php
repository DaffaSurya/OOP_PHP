<?php
 
 class Calculator {
    Const PHI = 3.14;
    // perkalian
    public function __construct($a , $b , $c , $d) {
     $this->a = $a;
     $this->b = $b;
     $this->c = $c;    
     $this->d = $d;
}

public function getPerkalian() {
    return $this->a * $this->b * $this->c * $this -> d;
}
// perkalian

// penjumlahan
 public static function Penjumlahan($tambah) {
    $jumlah = 0;
    foreach($tambah as $plus) {
     $jumlah += $plus;
    }
   return $jumlah;
 }
// penjumlahan
 
// pengurangan
public static function Pengurangan($Kurang) {
    $deacrease = 20;

    foreach($Kurang as $minus) {
        $deacrease -= $minus;
    }

    return $deacrease;

}


// pengurangan

//
public static function Pembagian($Division) {
    $bagi = 80;

    foreach($Division as $Div) {
        $bagi /= $Div;
    }

    return $bagi;

}

// Pangkat
public static function Pangkat($pangkat) {
    $hasil = pow($pangkat, 2) ;
    return $hasil;
}

// Pangkat

public static function Lingkaran($diameter) {
    $jari = $diameter/2;
    $phi = Calculator::PHI;
    return $phi*$jari*$jari; // rumus luas lingkaran phi * jari jari* jari jari
}

public static function Bola($param) {
    $pangkat = pow($param , 3);
    $phi = Calculator::PHI;
    return ($phi*$pangkat*4)/3; // rumus 4/3 * phi * jari-jari pangkat 3
}

}


$hasil = new Calculator(20 , 5 , 6 , 7);


// Output all method

echo "Hitung operasi matematika dari angka 20 , 5 , 6 , 7 ". "<br>";
echo "Hasil dari perkalian 20 , 5 , 6 , 7 = ". $hasil->getPerkalian() . "<br>";
echo "Hasil dari penjumlahan 20, 5, 6, 7 = ". Calculator::Penjumlahan(array(20, 5, 6, 7)). "<br>";
echo "Hasil dari pengurangan 20, 5, 6, 7 = ". Calculator::Pengurangan(array( 5, 6, 7)). "<br>";
echo "Hasil dari pembagian 80 , 2 , 5 , 4 = ". Calculator::Pembagian(array(2, 5, 4)). "<br>";
echo "Hasil dari pangkat adalah 30 pangkat 2 = ". Calculator::Pangkat(30) . "<br>";
echo "Hasil dari luas lingkaran adalah ". Calculator::Lingkaran(14.4). " cm" . "<br>";
echo "Hasil dari volume Bola adalah " . Calculator::Bola(7) . "cm";








?>