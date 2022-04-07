<?php
    require_once 'class_persegi.php';

    $persegi1= new persegi( 10 );
    $persegi2 = new persegi( 4 );
    
    echo "SISI PERSEGI 1 = 10 <br> Sisi Persegi 2 = 4<br>";
    echo "<br>Luas Persegi 1 =".$persegi1->luas();
    echo "<br>Keliling Persegi 1 = ".$persegi1->keliling();
    echo "<br>Luas Persegi 2 = ".$persegi2->luas();
    echo "<br>Keliling PErsegi 2 =".$persegi2->keliling();
?>