<?php
/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 06.02.2016
 * Time: 20:05
 */

$dbserver='192.168.0.100';
$userserver='moderator';
$passuserserver='123456';
$sqldb='serhio';

$connection=new PDO("mysql:host=$dbserver;dbname=$sqldb",$userserver, $passuserserver);
$sql1='create table if not EXISTS user (id INTEGER AUTO_INCREMENT, login VARCHAR(20), password VARCHAR (20), PRIMARY KEY (id))';
$sql2='create table if not EXISTS categories (id INTEGER AUTO_INCREMENT, name VARCHAR(20), PRIMARY KEY (id))';
$sql3='create table if not EXISTS goods (id INTEGER AUTO_INCREMENT, name VARCHAR(20), description VARCHAR(20), category_id INTEGER,
PRIMARY KEY (id), FOREIGN KEY (category_id) REFERENCES categories (id))';

$connection->exec($sql1);
$connection->exec($sql2);
$connection->exec($sql3);

$ins="INSERT INTO user (login, password) VALUES ('valera', '2222')";
$connection->exec($ins);


?>