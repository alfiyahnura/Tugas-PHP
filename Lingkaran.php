<?php 
 require_once 'abstract.php';
  class Lingkaran extends Bentuk2D{
    protected $jari2 = 7;
    
    public function namaBidang(){
        echo "Lingkaran";
    }
    public function luasBidang(){
      $luas = 3.14*$this->jari2 * $this->jari2;
      return $luas;
    }
    public function KelilingBidang(){
        $keliling = 2*3.14*$this->jari2 * $this->jari2;
        return $keliling;
    }
  }
 
?>
