<?php
class mobil4 {
    var $nama;
    var $merk;
    var ?string $warna = null;
    var $tahun;
    var $kecepatanmaksimal;


    // F U N C T I O N (This keyword)
    function infomobil(?string $nama)
    {
        // Kondisi jika parameter kosong maka akan ditampilkan properties dari objek
        if (is_null($nama)) {
            echo "Nama mobil adalah {$this->nama} <br>";
            // Jika parameter memiliki nilai maka yang ditampilkan adalah parameter pada function
        } else {
            echo "Mobil anda adalah $nama <br>";
        }
    }
    

}
// Membuat objek
$mobilempat = new mobil4();


// Mengakses function infomobil
$mobilempat->infomobil("XENIA");

// ATAU
// $mobilempat->infomobil(null);
?>