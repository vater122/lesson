<?php


class Db
{
    public static function getConnection()
    {
        $paramsPath = __DIR__ . '/../config/db_params.php';
        $params = include($paramsPath);

        $mysqli = @new mysqli($params['host'], $params['user'], $params['password'], $params['dbname']);
        $mysqli->set_charset("utf8");

        return $mysqli;
    }
}