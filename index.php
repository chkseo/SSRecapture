<?php
/*
 * SSRecapture
 * Сервис брошенных корзин
 * @author Kozikov Denis
 * @emai manden90@gmail.com
 */

/*
 * Определяем переменные
 */
require_once __DIR__ . '/classes/classConf.php';
$config = new Conf();

/*
 * Подключаем необходимые файлы
 */
require_once __DIR__ . '/core/init.php';

/*
 * Инициализация ядра
 */
$core = new Core();


/*
 * Подключение к базе
 */

DB::get_connect();

/*
 * Проверяем существование и валидность API ключа
 */
$API = new Api();
$API->validate_api_key();

/*
 * Производим роутинг
 */
$core->route();
