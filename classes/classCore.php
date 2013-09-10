<?php
class Core{
    /*
     * Уведомление пользователя о ошибке,
     * запись ошибки в лог и прекращение
     * выполнения кода
     */
    public static function error_msg($msg){
        print_r($msg);
        $filename = Conf::$work_dir . '/data/error_log.txt';
        $file = fopen($filename, 'a');
        $msg = date('d.m.Y H:i:s') . "\n" .  $msg . "\n\n";
        fwrite($file, $msg);
        exit;
    }
    
     /*
     * Роутинг запросов
     */
    public function route(){
        if (!isset($_GET['route'])) Core::error_msg('Ошибка роутинга');
        
        $router = $_GET['route'];
        
        switch ($router) {
            case 'add':
                    require_once Conf::$work_dir . '/core/add/index.php';
                break;
            
            default:
                
                break;
        }
    }
}
