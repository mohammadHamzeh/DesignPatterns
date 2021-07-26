<?php

class Db_connection {
    public static $instance;
    public $conn;
    private function __construct()
    {
        $this->conn="DB Connected";
    }

    public static function get_instance()
    {
        self::$instance = self::$instance ?? new self();
        return self::$instance;
    }

}

$db = Db_connection::get_instance();
var_dump($db);

$db2= Db_connection::get_instance();
var_dump($db2);

$db3 =Db_connection::get_instance();
var_dump($db3);

