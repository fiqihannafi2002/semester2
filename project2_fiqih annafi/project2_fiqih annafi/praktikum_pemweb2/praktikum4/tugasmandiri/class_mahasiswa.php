<?php 
    class mahasiswa{

        var $nama;
        var $nim;
        var $prodi;
        var $ipk;
        var $thn;
        
        function __construct($nim,$nama)
        {
            $this->nim = $nim;
            $this->nama = $nama;
        }

        function prdikatIpk(){
            if ($this->ipk < 2.0){
                return "cukup"; 
            }else if ($this->ipk == 2.0 && $this->ipk < 3.0){
                return "baik"; 
            }else if ($this->ipk == 3.0 && $this->ipk < 3.75){
                return "memuaskan"; 
            }else if ($this->ipk >= 3.75 && $this->ipk == 4.0){
                return "CumLaude"; 
            }else{
                return "Tidak Ada";
            }
        }
    }
?>