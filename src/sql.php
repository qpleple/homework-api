<?php

SQL::open($db_server, $db_port, $db_user, $db_passwd, $db_name);

class SQL {
    static $bdd;

    static public function open($db_server, $db_port, $db_user, $db_passwd, $db_name) {
        $db_connection = "mysql:host=$db_server;port=$db_port;dbname=$db_name";
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$bdd = new PDO($db_connection, $db_user, $db_passwd, $pdo_options);
        } catch (Exception $e){
            die($e->getMessage() . "<br> $db_connection");
            //die("Database configuration problem.");
        }
    }

    static function prepare($sql) {
        return self::$bdd->prepare($sql);
    }
}
