<?php 

 class Pecahan {
     private $Pembilang = 0;
     private $penyebut = 0;

     public function __construct($Pembilang , $Penyebut) {
        $this->Pembilang = $Pembilang;
        $this->Penyebut = $Penyebut;     
    }

    public function get_Pembilang() { // method untuk pembilang
      return $this-> Pembilang;
    }

    public function get_Penyebut() {  // method untuk penyebut
        return $this-> Penyebut;
    }
    


}

$Pecahan = new Pecahan(5, 4); // -> 5/4
$Pecahan1 = new Pecahan(2,4); // -> 2/4

$TotalPembilang = $Pecahan -> get_Pembilang() + $Pecahan1->get_Pembilang();
$TotalPenyebut = $Pecahan -> get_Penyebut() + $Pecahan1 -> get_Penyebut();

echo "Pecahan pertama adalah ". $Pecahan -> get_Pembilang() . "/" . $Pecahan -> get_Penyebut(). "<br>";
echo "Pecahan kedua adalah ". $Pecahan1 -> get_pembilang() . "/" . $Pecahan1 -> get_Penyebut(). "<br>";
echo "Total penjumlahan dari kedua pecahan diatas adalah " . $TotalPembilang . "/" . $TotalPenyebut;


?>