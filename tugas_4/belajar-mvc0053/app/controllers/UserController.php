<?php
require_once 'app/models/User.php';

/* P E N J E L A S A N
1. UserController bertanggung jawab atas proses logika dari permintaan pengguna.
2. Fungsi show($id) menerima parameter ID, mengambil data pengguna dari model User, dan kemudian meneruskan data tersebut ke view 
(userView.php).
*/

class UserController
{
    private $userModel;

    public function __construct($dbConnection)
    {
        $this->userModel = new User($dbConnection);
    }

    public function show($id)
    {
        // Mengambil data pengguna dari model 
        $user = $this->userModel->getUserById($id);

        // Membuat view dan meneruskan data pengguna
        require_once 'app/views/userView.php';
    }
    
}


?>