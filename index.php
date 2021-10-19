<?php
// список языков
$sites = array(
    "ru" => "ru/index.html",
    "de" => "de/index.html",
	"pl" => "pl/index.html",
    "ua" => "ua/index.html",
    "en" => "en/index.html",
);

// получаем язык
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// проверяем язык
if (!in_array($lang, array_keys($sites))){
    $lang = 'en';
}
// перенаправление на субдомен
header('Location: ' . $sites[$lang]);

?>
