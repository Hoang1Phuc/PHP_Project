<?php
class Database {
    private $host = "localhost"; 
    private $db_name = "test1"; 
    private $username = "root";
    private $password = ""; 
    public $conn;

    // Hàm kết nối cơ sở dữ liệu
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Lỗi kết nối: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>
