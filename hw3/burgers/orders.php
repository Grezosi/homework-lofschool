<?php


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$adress =  'Улица ' . $_POST['street'] . '. Дом '. $_POST['home'] .  '. Подъезд '. $_POST['part'] . '. Квартира '. $_POST['appt'].  '. Этаж '. $_POST['floor'];
$userId = '';
//var_dump($name, $phone, $email);

$pdo = new PDO('mysql:host=localhost; dbname=Burgers', 'root', null);

    $query = $pdo->query("select * from `users` where email = '$email'");
    $user = $query->fetchAll(PDO::FETCH_ASSOC);

    If (!$user) {
         $query = $pdo->prepare("insert into `users` (`name`, `phone`, `email`, `order_count`) values (?, ?, ?, 1)");
         $query->execute([$name, $phone, $email]);
    } else {
        $pdo->query("update `users` set `order_count` = `order_count` + 1 where email = '$email'");
    }
        $query = $pdo->query("select `id` from `users` where email = '$email'");
        $userId = $query->fetchAll(PDO::FETCH_ASSOC)[0]['id'];

 //   var_dump($adress);
 //   var_dump($id);

   $pdo->query("insert into `orders` (`user_id`, `adress`) values ('$userId', '$adress')");

   $orderId = $pdo->lastInsertId();
   $result = $pdo->query("select `adress`, `id` from `orders` where `user_id` = '$userId' and `id` = '$orderId'");
   $res = $result->fetchAll(PDO::FETCH_ASSOC);
   //var_dump($res);

  foreach ($res as $k => $v) {

      echo  "Спасибо, ваш заказ будет доставлен по адресу: "  . $v['adress'] . ". <br>" .
"Номер вашего заказа: " . $v['id'] .  "<br>";
  }

  $query = $pdo->query("select `order_count` from `users` where email = '$email'");
  $res = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($res as $v) {
    echo "Это ваш " . $v['order_count']. "-й заказ!";
  }