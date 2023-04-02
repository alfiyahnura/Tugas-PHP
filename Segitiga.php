<?php 
 require_once 'abstract.php';
  class Segitiga extends Bentuk2D{
    protected $alas = 8;
    protected $tinggi = 4;
    protected $sisi = 4;
    
    public function namaBidang(){
        echo "Segitiga";
    }
    public function luasBidang(){
      $luas = 0.5*$this->alas * $this->tinggi;
      return $luas;
    }
    public function KelilingBidang(){
        $keliling = (2*$this->sisi) + $this->alas;
        return $keliling;
    }
  }
 
?>
