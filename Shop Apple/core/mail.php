
 <?php

   $json = file_get_contents('../goods.json');
   $json = json_decode($json, true);

   $message = '';
   $message .= '<p>Оформлення замовлення</p>';
   $message .= '<p>Добрий день: ' . $_POST['name'] . ' ' . $_POST['surname'] . '</p>';
   $message .= '<p>Введіть номер за яким ми вам зателефонуємо: ' . $_POST['tel'] . '</p>';
   $message .= '<p>Місто доставки: ' . $_POST['city'] . '</p>';

   $cart = $_POST['cart'];
   $sum = 0;
   foreach ($cart as $id => $count) {
      $message .= $json[$id]['name'] . '-----';
      $message .= $count . '--------';
      $message .= $count * $json[$id]['cost'];
      $message .= '<br>';
      $sum = $sum + $count * $json[$id]['cost'];
   }


   $subject = "Ви залишили замовлення на сайті";

   $to = "tukvaru096@gmail.com" .
      $from = trim($_POST['gmail']);
   $headers  = "From: $from" . "\r\n" .
      "Reply-To: $from" . "\r\n" .
      "X-Mailer: PHP/" . phpversion();


   $m = mail($to, $subject, $message, $headers);
   if ($m) {
      echo "Успішно";
   } else {
      echo "Помилка";
   }
   ?>
