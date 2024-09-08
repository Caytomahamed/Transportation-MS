<?php

class Database
{
    protected static $connection = null;

    public function __construct()
    {
        try {
            self::$connection = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE_NAME);
            if (mysqli_connect_errno()) {
                throw new Exception("Could not connect to the database.");
            }

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

    }

    public static function closeConnection()
    {
        mysqli_close(self::$connection);
    }
}

new Database();
