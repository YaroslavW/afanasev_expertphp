<?php

/*
 * Инициализация поделючения к БД
 */

$dblocation = "127.0.0.1";
$dbname = "afanasev-expertphp";
$dbuser = "admin";
$dbpassword = "";

//connect to DB
$db = mysql_connect($dblocation, $dbuser, $dbpassword);

if(! $db){
    echo 'Ошибка доступа к MySQL';
    exit();
}

//кодировка по умолчанию для текущего сондинения
mysql_set_charset('utf8');

if(! mysql_select_db($dbname ,$db) ){
    echo "Ошибка доступа к базе данных: {$dbname}";
    exit();
}