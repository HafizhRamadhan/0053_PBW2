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

    public function getAllUsers()
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }   
    public function deleteUserById($id)
    {
    $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
    $stmt->bindParam(':id', $id);
    return $stmt->execute();
    }

    public function updateUser($id, $name, $email)
    {
        $stmt = $this->db->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
    }
    public function getUserById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}

?>