<?php
class Model{
    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = 'root';
    private static $db_name = 'prueba_usuarios';
    private static $db_charset = 'utf8';

    private $conn;
    protected $query;
    protected $rows = array();

    private function db_open(){
        $this->conn = $mysqli = new mysqli(
            self::$db_host,
            self::$db_pass,
            self::$db_user,
            self::$db_name
        );
        $this->conn->set_charset(self::$db_charset);
        if ($mysqli->connect_errno) {
            printf("Falló la conexión: %s\n", $mysqli->connect_error);
            exit();
        }
    }
    private function db_close(){
        $this->conn->close();
    }
    protected function set_query(){
        $this->db_open();
        $this->conn->query($this->query);
        $this->db_close();
    }
    protected function get_query(){
        $this->db_open();
        $result = $this->conn->query($this->query);
        while($this->rows[] = $result->fetch_assoc());
        $result->free();
        $this->db_close();
        return array_pop($this->rows);
    }
}