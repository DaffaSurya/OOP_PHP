<?php
 
 class MobilPickup {
    private $jarak = 0;
    public $Kapasitas = 0;

    private $bensin = 0;

    public static $jarak_Tempuh = 3300; // Static Variable
    
    public static function Hitung($bensin) {
     
    $liter = 15;
    foreach($bensin as $bbm) {
      $var = MobilPickup::$jarak_Tempuh;
      $TotalBensin = $var /= $liter;
      $Tampung = $TotalBensin - $bbm;
    }

     return $Tampung;
    //  return $TotalBensin;
    }

    public function __construct($Kapasitas) {
      $this -> kapasitas = $Kapasitas;
     }

    // Declare function Protected to inheritance

    protected function intro() {
      $liter = 15;
      $var = MobilPickup::$jarak_Tempuh;
      $Totalbensin = $var /= $liter;
      return $Totalbensin;
    }


    public function get_hasil() {
        return $this -> kapasitas;
    }

 
 }
  // Cari berapa kali mobil melakukan pengisian
 $Pickup = MobilPickup::Hitung(array(10));
 $obj = new MobilPickup(45);

 $Result = $Pickup / $obj -> get_hasil();

 $Hasil = ceil($Result);

 echo "Mobil Pickup Mengisi bensin sebanyak " . $Hasil . " kali untuk jarak tempuh " . MobilPickup::$jarak_Tempuh ." km". "<br>";

 class Perjalanan extends MobilPickup {
   
   public function SisaBBmDitujuan() {
     return $this -> intro() - 10;

   }
   
 }

 $perjalanan = new Perjalanan(45);
 $BBmDiisi = $Hasil * 45;
 $Tampung_hasil = $BBmDiisi - $perjalanan -> SisaBBmDitujuan();



 echo "sisa bbm yang tersisa sebesar " . $Tampung_hasil . " Liter";


?>