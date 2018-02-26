<?php

$host = 'localhost';
$dbname = 'alice_1';
$user = 'alice_1';
$password = 'riZrCkCNaO';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$db->exec("set names utf8");

    //закрыть соединение
    //$db = null;
} catch (PDOException $e) {
    print "Ошибка подключения к БД!<br/>" . $e->getMessage() . "<br/>";
    die();
}
