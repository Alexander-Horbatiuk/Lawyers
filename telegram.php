<?php

/* https://api.telegram.org/bot1608255856:AAHUz98s-JhYoZgDqC_K8nts-Ft8yVevNtM
/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email  = $_POST['user_email'];
$user_text  = $_POST['user_text'];
$select = $_POST['select'];




$token = "1608255856:AAHUz98s-JhYoZgDqC_K8nts-Ft8yVevNtM";
$chat_id = "-504743228";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email ' => $email,
  'Текст ' => $user_text,
  'Тема ' => $select,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>

 