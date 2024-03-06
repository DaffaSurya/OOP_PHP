<?php 
 
 class GameCharacter {
     private $name = "name";
     private $lifePoint = 0;
     private $attackHit = 0;
     private $attackKick = 0;

     public function __construct($name , $lifePoint , $attackHit , $attackKick) {
       $this -> lp = $lifePoint;
       $this -> name = $name;
       $this -> Hit = $attackHit;
       $this -> kick = $attackKick;
     }

     public function __destruct() {
        echo "Karakter ". $this -> name  . " memiliki lifepoint awal sebesar ". $this -> lp ."<br>"; 
     }  

     public function getAttackGoku() { // akumulasi tendangan Goku ke subzero
       return $this -> kick * 2;
     } 

     public function getLp() {
        return $this -> lp;
     }

     public function getAttackSub() {
        return $this -> Hit * 3;
     }
     
     public function getHitGoku() {
        return $this -> Hit * 2;
     }
     }
 

 $Goku = new GameCharacter("Goku" , 110 , 20 , 30);
 $Subzero = new GameCharacter("Subzero", 100 , 25, 35);

 
 $attackGoku = $Goku -> getAttackGoku();
 $lpSub = $Subzero -> getLp();
 $lpGoku = $Goku -> getLp();
 $attackSub = $Subzero -> getAttackSub();
 $TotalSub = $lpSub - $attackGoku;
 $TotalGoku = $lpGoku - $attackSub;
 $HitGoku = $Goku -> getHitGoku();
 $resultSub = $TotalSub - $HitGoku;

 echo "Goku melakukan tendangan kepada Subzero sebanyak 2 kali sisa lifePoint Subzero adalah ".$TotalSub. "<br>";
 echo "Subzero melakukan pukulan kepada Goku sebanyak 3 kali sisa lifePoint Goku adalah ". $TotalGoku. "<br>";
 echo "Goku melakukan pukulan kepada Subzero sebanyak 2 kali sisa lifePoint Subzero adalah ". $resultSub. "<br>";
 
?>