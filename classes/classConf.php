<?php
class Conf
{
    
    public static $work_dir;
    public static $tpl_dir;
    
    function __construct() {
        self::$work_dir = $_SERVER['DOCUMENT_ROOT'];
        self::$tpl_dir = self::$work_dir . '/templates';
    }
    
    function get_work_dir(){
        return self::$work_dir;
    }
    
    
}
