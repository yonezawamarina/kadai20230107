<?php
// DB接続
    $dbName = 'mysql:host=localhost;dbname=imageposting;charset=utf8';
    $userName = 'root';

    try {
        $db = new PDO($dbName, $userName);
    } catch (\Throwable $th) {
        exit();
    }