<?
spl_autoload_register(function ($class) {
    include realpath(__DIR__ . '/../classes/' . str_replace('\\', '/', $class) . '.php');
});
date_default_timezone_set("Europe/Moscow");