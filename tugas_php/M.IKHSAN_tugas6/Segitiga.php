<?php
require_once 'Abstract.php';

class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi){
        $this-> alas = $alas;
        $this-> tinggi = $tinggi;
    }

    public function namaBidang(){
       return "Segitiga";
    }

    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function kelilingBidang(){
        $keliling = $this->alas * 3;
        return $keliling;
    }
    public function Alas() {
        return $this->alas;
    }

    public function Tinggi() {
        return $this->tinggi;
    }
    
}
?>