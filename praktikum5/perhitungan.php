<?php
 class persegiPanjang{
     public $panjang, $lebar;
     public function luas(){
         $hasil = $this->panjang * $this->lebar;
         return $hasil;
     }
 }