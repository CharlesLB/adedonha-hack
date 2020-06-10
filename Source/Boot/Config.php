<?php

//
// ─── ROUTES ─────────────────────────────────────────────────────────────────────
//


define("ROOT", "https://www.localhost/adedonha-hack");

//
// ─── SITE ───────────────────────────────────────────────────────────────────────
//


define("SITE", "Adedonha Hack");
define("GITHUB", "https://github.com/CharlesLB/adedonha-hack");


//
// ─── DATABASE ───────────────────────────────────────────────────────────────────
//

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "db_adedonha",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
