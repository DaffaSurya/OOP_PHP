<?php

 class Profile {
    private $person = "person";
    private $hobby = " hobby";
    private $zodiac = "zodiac";
    private $TB = 0;

  public function __construct($person, $hobby, $zodiac, $TB) {
    $this->person = $person;
    $this->hobby = $hobby;
    $this->zodiac = $zodiac;
    $this->TB = $TB;
  }
 
 }

 $People1 = new Profile("Zaqi", "Main Game", "capricon", 178);
 $People2 = new Profile("feli", "Melukis", "Leo", 160);

 echo "data diri: ". $People1 ->getPerson() . "<br>";
 echo "data diri: ". $People2 ->getPerson() . "<br>";
 ?>