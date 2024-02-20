<?php

namespace Dell\Codephp\Commons;

class Model
{
    protected \PDO|null $conn;
    public function __construct()
    {
        $host = DB_HOST;
        $port = DB_PORT;
        $user = DB_USER;
        $pass = DB_PASS;
        $dbname = DB_NAME;
        try {
            $this->conn = new \PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function __destruct()
    {
        $this->conn = null;
    }
}
