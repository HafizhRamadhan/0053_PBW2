<?php
/* K E T E R A N G A N
1. Kelas User bertanggung jawab untuk berinteraksi dengan database dan melakukan operasi yang berhubungan dengan data pengguna.
2. Fungsi getUserById() mengambil data pengguna berdasarkan ID daridatabase.
*/
class User
{
    private $db;
    
    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function getUserById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id= :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}

?>