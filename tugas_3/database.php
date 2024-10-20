<?php
    class Database{
        // P R O P E R T I
        public $host = "localhost";
        public $user = "root";
        public $pass = "";
        public $database = "db_php0053";

        public $connect;
        function __construct()
        {
            $this->connect = mysqli_connect($this->host, $this->user,$this->pass);
            mysqli_select_db($this->connect, $this->database);

            /* 
            // P E N G E C E K A N
            if($this->connect->connect_error){
                die ("Koneksi gagal : " .$this->connect->connect_error);
            } else {
                echo "Koneksi berhasi";
            }
            */
        }
        function tampilData(){
            $data = mysqli_query($this->connect, "SELECT *FROM tb_user0053");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            // var_dump($rows);
            return $rows;
        }
        function tambahData($nama,$alamat,$nohp,$jenis_kelamin,$foto){
            mysqli_query($this->connect, "INSERT INTO tb_user0053 VALUES (NULL,'$nama','$alamat','$nohp','$jenis_kelamin','$foto')");
        }
        function editData($id){
            $data = mysqli_query($this->connect,"SELECT *FROM tb_user0053 WHERE id='$id'");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $rows;
        }
        function updateData($id,$nama,$alamat,$nohp,$jenis_kelamin, $foto){
            mysqli_query($this->connect, "UPDATE tb_user0053 SET nama='$nama', alamat='$alamat', nohp='$nohp', jenis_kelamin='$jenis_kelamin', foto='$foto' WHERE id='$id'");
        }
        function hapusData($id){
            mysqli_query($this->connect, "DELETE FROM tb_user0053 WHERE id='$id'");
        }
    }

?>
