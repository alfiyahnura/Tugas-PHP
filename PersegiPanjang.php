<?php 
 require_once 'abstract.php';
  class PersegiPanjang extends Bentuk2D{
    protected $panjang = 8;
    protected $lebar = 4;
    
    public function namaBidang(){
        echo "Persegi Panjang";
    }
    public function luasBidang(){
      $luas = $this->panjang * $this->lebar;
      return $luas;
    }
    public function KelilingBidang(){
        $keliling = 2*($this->panjang + $this->lebar);
        return $keliling;
    }
  }
 
?>
