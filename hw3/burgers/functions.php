<?php


function connectDb() {
    return new PDO('mysql:host=localhost; dbname=Burgers', 'root', null);
}




function getUserId($email, PDO $pdo)
{
    $q = $pdo->prepare("select `id` from `users` where email = ?");
    $q->execute([$email]);
    return $q->fetchColumn();
}

function insertUser($name, $email, $phone, PDO $pdo)
{
    $q = $pdo->prepare("insert into `users` (`name`, `phone`, `email`, `order_count`) values (?, ?, ?, 0)");
    $q->execute([$name, $phone, $email]);
}

function orderCountUpd($email, PDO $pdo)
{
   $q = $pdo->prepare("update `users` set `order_count` = `order_count` + 1 where email = ?");
   $q->execute([$email]);
}

function insertOrder($userId, $adress, PDO $pdo)
{
    $q = $pdo->prepare("insert into `orders` (`user_id`, `adress`) values (?, ?)");
    $q->execute([$userId, $adress]);
}

function getOrderData($user_id, $order_id, PDO $pdo)
{
    $q = $pdo->prepare("select `adress`, `id` from `orders` where `user_id` = ? and `id` = ?");
    $q->execute([$user_id, $order_id]);
    return $q->fetchAll();
}

function getOrdersCount($email, PDO $pdo)
{
    $q = $pdo->prepare("select `order_count` from `users` where email = ?");
    $q->execute([$email]);
    return $q->fetchColumn();
}