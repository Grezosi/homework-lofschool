<?php


function connect(): object {
    $pdo = new PDO('mysql:host=localhost; dbname=Burgers', 'root', null);
    return $pdo;
}


function select(string $query)
{
    connect();
    $q = $pdo->prepare($query);
}