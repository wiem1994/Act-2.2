<?php

class connectDB
{
    public $localhost = 'localhost';
    public $username = 'wiem';
    public $password = 'wiem23825269';
    public $db;
    public static $instance;
    private static $conn;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new connectDB();
        } else {
            echo "database already exists";
        }

        return self::$instance;
    }


    // public function __construct()
    // {
    //     $this->conn = new mysqli($this->localhost, $this->username, $this->password, $this->db);
    //     if (!$this->conn) {
    //         echo 'Connection error' . mysqli_connect_error();
    //     }
    //else {
    //     echo "you are successfully connected to the new method";
    // }
    // }

    // public function getConnection($db)
    // {

    //     $this->conn = new mysqli($this->localhost, $this->username, $this->password, $db);
    //     if (!$this->conn) {
    //         echo 'Connection error' . mysqli_connect_error();
    //     }
    //     return $this->conn;
    // }


    public static function connect($dbName)

    {

        self::$conn = new mysqli('localhost', 'wiem', 'wiem23825269', $dbName);
    }

    public static function getConnection()

    {

        return self::$conn;
    }
}
