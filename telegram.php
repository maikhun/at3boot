<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

if (stristr($msg, 'http') === FALSE && strlen($phone) < 12) {
  $status = 1;
} else {
  $status = 0;
}

// Токен AT3BOOT_BOT
$token = "5648920080:AAFvRs3TPB-o8ymgnULu-Q-rSh94B6tbaqg";

// Рабочий чат для поступления заявок
// $chat_id = "-913765800";

// Чат для проверки работы бота
$chat_id = "-795121285";



$arr = array(
  'ФИО пользователя: ' => $name,
  'Email: ' => $email,
  'Телефон: ' => $phone,
  'Информация в заявке: ' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

if ($name != null && $email != null && $phone != null && $status == 1) {
  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
}

if ($sendToTelegram) {
  header('Location: https://at3boot.com');
} else {
  echo "Error";
}
?>