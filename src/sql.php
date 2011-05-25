<?php

SQL::open();

class SQL {
    static $bdd;

    static public function open() {
        try {
            $db_server = "localhost"; // "db.mathsapi.dotcloud.com";
            $db_user = "root";
            $db_passwd = "root";
            $db_name = "homeworkapi";
            
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            
            self::$bdd = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_passwd, $pdo_options);
        } catch (Exception $e){
            die("Database configuration problem.");
        }
    }

    static function prepare($sql) {
        return self::$bdd->prepare($sql);
    }
}
