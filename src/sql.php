<?php

SQL::open($db_server, $db_user, $db_passwd, $db_name);

class SQL {
    static $bdd;

    static public function open($db_server, $db_user, $db_passwd, $db_name) {
        echo "$db_server, $db_user, $db_passwd, $db_name";
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            
            self::$bdd = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_passwd, $pdo_options);
        } catch (Exception $e){
            die($e->getMessage());
            //die("Database configuration problem.");
        }
    }

    static function prepare($sql) {
        return self::$bdd->prepare($sql);
    }
}
