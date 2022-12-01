<?php
require ('functions.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$adress =  'Улица ' . $_POST['street'] . '. Дом '. $_POST['home'] .  '. Подъезд '. $_POST['part'] . '. Квартира '. $_POST['appt'].  '. Этаж '. $_POST['floor'];
$userId = '';

$pdo = connectDb();

   $userId = getUserId($email, $pdo);

    If (is_bool($userId)) {
        insertUser($name, $email, $phone, $pdo);
    }
    $userId = getUserId($email, $pdo);


    insertOrder($userId, $adress, $pdo);

    $orderId = $pdo->lastInsertId();

    orderCountUpd($email, $pdo);

    $res = getOrderData($userId, $orderId, $pdo);


  foreach ($res as $k => $v) {

      echo  "Спасибо, ваш заказ будет доставлен по адресу: "  . $v['adress'] . ". <br>" .
"Номер вашего заказа: " . $v['id'] .  "<br>";
  }

  $orderCount = getOrdersCount($email, $pdo);

  echo "Это ваш " . $orderCount. "-й заказ!";
