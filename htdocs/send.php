<?php

require_once('PHPMailer.php');
require_once('SMTP.php');
require_once('Exception.php');
    
$email = $_POST['email'];
$message = $_POST['message'];
$submit = $_POST['submit'];

$email = htmlspecialchars[$email];   // преобразование символов в сущности
$message = htmlspecialchars[$message];

$email = urldecode[$email];       // декодирование url
$message = urldecode[$message];

$email = trim[$email];				// удаление побельных символов
$message = trim[$message];

$to = 'geniu.gell35@qamenb.ru';
// отправляем данные

if (isset($_POST['submit'])){
    mail($to, $email, $message);
} else{
    echo ('problems...');
}
 



?>