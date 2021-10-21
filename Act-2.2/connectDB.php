<?php

class connectDB
{
    private $localhost = 'localhost';
    private $username = 'username';
    private $password = '';
    private $db = 'test_db';
    public static $instance;
    private $conn;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new connectDB();
        } else {
            echo "database already exists";
        }

        return self::$instance;
    }


    public function __construct()
    {
        $this->conn = new mysqli($this->localhost, $this->username, $this->password, $this->db);
        if (!$this->conn) {
            echo 'Connection error' . mysqli_connect_error();
        }
        //else {
        //     echo "you are successfully connected to the new method";
        // }
    }

    public function getConnection()
    {
        return $this->conn;
    }
}
