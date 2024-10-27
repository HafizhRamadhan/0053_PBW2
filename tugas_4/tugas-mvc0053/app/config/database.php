<?php
/* P E N J E L A S A N
1. Fungsi getDBConnection() menyediakan koneksi ke database menggunakan PDO, yang digunakan oleh Model untuk mengakses 
database.
*/
function getDBConnection()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=dbmvc', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo 'Connection failed: '.$e->getMessage();
    }
}

?>