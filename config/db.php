<?php

class Database
{
    private $host = "localhost";
    private $db_name = "suplementos";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host .
                ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->exec("set names utf8"); //para ler caracteres especiais como acento 
        } catch (PDOException $erro) {
            echo "Opsss!" . $erro->getMessage();
        }

        return $this->conn;
    }


}

