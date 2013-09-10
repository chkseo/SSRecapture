<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Content-Type: text/html; charset=utf-8');


require_once $config->get_work_dir() . '/classes/classCore.php';
require_once $config->get_work_dir() . '/classes/classDb.php';
require_once $config->get_work_dir() . '/classes/classApi.php';