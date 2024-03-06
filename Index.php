<?php
  
  class mahasiswa {
     
      private $nama;

      public function __construct($nama_Mhs) {
        $this -> nama = $nama_Mhs;
        echo "namanya adalah ". $this -> nama."<br>";
      }

    //   public function getNama() {
    //     return $this -> nama;
    //   }

      public function __destruct() {  // session destroy
        echo "nama dari". $this -> nama ."telah dihancurkan";                                        
      }

  }

  $mhs = new mahasiswa("obed");

//   echo "nama mahasiswanya adalah ". $mhs -> getNama();
?>