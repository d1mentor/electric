<?php

$name = filter_input(INPUT_POST, 'name');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');
$subj = filter_input(INPUT_POST, 'subject');

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$subj = htmlspecialchars($subj);

$name = urldecode($name);
$phone = urldecode($phone);
$email = urldecode($email);
$subj = urldecode($subj);

$name = trim($name);
$phone = trim($phone);
$email = trim($email);
$subj = trim($subj);

mail("gerasim1305@gmail.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email." Phone:".$phone." Subject: ".$subj ,"From: example@gmail.ru \r\n");

$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();

?>
