<?php

class pasien{

    public $id;
    private $kode_siswa;
    public $nama_siswa;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $jeniskelamin;

    function __construct($kode_siswa, $nama_siswa, $jeniskelamin){
        $this->kode_siswa = $kode_siswa;
        $this->nama_siswa = $nama_siswa;
        $this->jeniskelamin = $jeniskelamin;
    }
    

    public function getKode(){
        return$this->kode_siswa;
    }

    public function getNama(){
        return$this->nama_siswa;
    }

    public function getjeniskelamin(){
       return $this->jeniskelamin;
    }
}


?>