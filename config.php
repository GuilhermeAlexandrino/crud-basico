<?php

$db_name = 'bancoteste';
$db_host = 'localhost:3306';
$db_user = 'root';
$db_password = '';

$pdo = new PDO("mysql:dbname=".$db_name."; host=".$db_host, $db_user, $db_password);