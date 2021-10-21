<?php

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$subj = $_POST["subject"];

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

$sites = array(
    "en" => "en",
    "de" => "de",
	"pl" => "pl",
	"ru" => "ru",
	"ua" => "ua",

);

// получаем язык
$loc = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// проверяем язык
if (!in_array($loc, array_keys($sites))){
    $loc = 'en';
}

mail("gerasimenko1305@gmail.com", "Заявка с сайта", "ФИО:".$name.".\n E-mail: ".$email." \nPhone:".$phone." \nSubject: ".$subj."\nFrom: electric, Location:".$sites[$loc] ,"From: stabilizator.ml \r\n");


$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
exit();


?>