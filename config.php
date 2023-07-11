<?php
class DB {
    public static function connect() {
        try {
            $host = 'localhost';
            $port = '3306';
            $database = 'megamedia';
            $username = 'root';
            $password = '';
            $connection = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);
            $connection->exec("set names utf8mb4");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOExecption $e) {
            echo "Connection failed: {$e->getMessage()}";

        }
    }
}
?>