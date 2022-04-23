<?php
    class persegi{

        function __construct( $s ){
            $this->sisi = $s;
        }

        function luas(){
            return $this->sisi * $this->sisi ;
        }

        function keliling(){
            return $this->sisi  * 4;
        }
    }
?>