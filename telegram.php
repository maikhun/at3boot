<?php

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$token = "5648920080:AAFvRs3TPB-o8ymgnULu-Q-rSh94B6tbaqg";
$chat_id = "-795121285";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email:' => $email,
  'Содержание заявки:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

if ($name != null && $email != null) {
  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
}

if ($sendToTelegram) {
  header('Location: https://at3boot.com');
} else {
  echo "Error";
}
?>