<?php

$db_server = "localhost";
$db_port = "3306";
$db_user = "root";
$db_passwd = "root";
$db_name = "homeworkapi";

if ($_SERVER['SERVER_NAME'] == "homeworkapi-www") {
    $db_server = "db.homeworkapi.dotcloud.com";
    $db_port = "5581";
    $db_user = "root";
    $db_passwd = '+qwE-CD8nt>!N(%^C6D4';
    $db_name = "homeworkapi";
}