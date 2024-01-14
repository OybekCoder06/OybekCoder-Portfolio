<?php

/* https://api.telegram.org/bot6833596743:AAEF3WUWpPHX7ddoZ2NEl55D_XImrXJ73BY/getUpdates,
sdgfsdgsd */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$comment = $_POST['user_comment'];
$token = "6833596743:AAEF3WUWpPHX7ddoZ2NEl55D_XImrXJ73BY"
$chat_id = "-4119219800"
$arr = array(
  '💁‍♂️ Ismi: ' = $name,
  '📱 Telefon: ' = $phone,
  '✉ Email: ' = $email,
  '📜 Izoh: ' = $comment,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" .$key ."</b>" .$value. "%0A"

};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r")

if ($sendToTelegram) {
  header('Location: rahmat.html');
} else {
  echo "Error";
}

?>
