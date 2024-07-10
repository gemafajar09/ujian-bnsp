<?php

class Database {
    private static $host = "localhost";
    private static $user = "root";
    private static $pass = "";
    private static $database = "db_hotel";

    private static $connect = null;

    public function __construct()
    {
        die("Tidak Mendapatkan Akses");
    }

    public static function connect()
    {
        if(null == self::$connect)
        {
            try {
                self::$connect = new mysqli(self::$host, self::$user, self::$pass, self::$database);
            } catch (Throwable $e) {
                die($e->getMessage());
            }
        }
        return self::$connect;
    }

    public static function disconect()
    {
        self::$connect = null;
    }
}