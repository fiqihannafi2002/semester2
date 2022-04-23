<?php
    class fruit{
        public $nama, $color;
        public function __construct($nama, $color){
            $this->nama=$nama;
            $this->color=$color;
        }
        public function intro(){
            echo "buahnya adalah {$this->nama} dan warnanya adalah {$this->color}" ;
        }
    }

    class strawberry extends fruit{
        public $weight;
        public function __construct($nama, $color, $weight){
            $this->nama=$nama;
            $this->color=$color;
            $this->weight=$weight;
        }
        public function intro(){
            echo "<br/> buahnya adalah {$this->nama} dan warnanya adalah {$this->color} dan beratnya adalah {$this->weight}";
        }

    }

    $strawberry = new strawberry ("strawberry", "red", 80);
    $strawberry->intro();


?>