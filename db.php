<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 08.02.2016
 * Time: 18:38
 */

function conn_db()
{
    $dbserver = '192.168.0.100';
    $userserver = 'moderator';
    $passuserserver = '123456';
    $sqldb = 'serhio';
    $connection = new PDO("mysql:host=$dbserver;dbname=$sqldb", $userserver, $passuserserver);
    return $connection;
}

