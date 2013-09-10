<?php
class Core{
    public static function error_msg($msg){
        print_r($msg);
        $filename = Conf::$work_dir . '/data/error_log.txt';
        $file = fopen($filename, 'a');
        $msg = date('d.m.Y H:i:s') . "\n" .  $msg . "\n\n";
        fwrite($file, $msg);
        exit;
    }
}
