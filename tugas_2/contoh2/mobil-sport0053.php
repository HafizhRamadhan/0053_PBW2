<?php
class mobilsports extends mobil0053 {
    public $turbo = false;

    function jalankanturbo(){
        $this->turbo = true;
        return "Jalankan Turbo!";
    }

    // Function overriding
    function infomobil0053() {
        return "Nama Mobil : $this->nama <br>"
        . "Brand : $this->brand <br>"
        . "Tahun : ".$this->tahun."<br>";
    }
}

?>