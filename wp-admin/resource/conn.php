<?php



class Database {
    private $host = "localhost"; 
    private $db_name = "b2bacademy"; 
    private $username = "mark";   
    private $password = "";       
    public $conn;

    // Get database connection
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

function safe_htmlspecialchars($value)
{
    return htmlspecialchars($value !== null ? $value : '-', ENT_QUOTES, 'UTF-8');
}


?>


