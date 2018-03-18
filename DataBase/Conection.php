<?php
/**
 * Created by PhpStorm.
 * User: thiagodemas
 * Date: 18/03/18
 * Time: 13:17
 */
require_once 'config.php';

class Conection
{
    private static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance))

           try{
               self::$instance = new PDO(DSN.':host='.HOST.'; dbname='.BASE,USER,PASS);
               self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           }catch(PDOException $ex){
                $ex->getCode().'<br>';
                $ex->getMessage();
           }
        return self::$instance;
    }

    public static function prepare($sql)
    {
        if (!self::getInstance()->prepare($sql)){
            echo 'Conection_Error';
        }else{
            return self::getInstance()->prepare($sql);
            echo 'Conection_Success';
        }

    }


}