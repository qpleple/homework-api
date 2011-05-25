<?php

$dev = ($_SERVER['SERVER_NAME'] == "homeworkapi");

if ($dev) {
    $db_server = "localhost";
    $db_user = "root";
    $db_passwd = "root";
    $db_name = "homeworkapi";
} else {
    $db_server = "db.homeworkapi.dotcloud.com:5581";
    $db_user = "root";
    $db_passwd = '+qwE-CD8nt>!N(%^C6D4';
    $db_name = "homeworkapi";
}

