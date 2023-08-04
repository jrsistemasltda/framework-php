<?php 

namespace app\framework\database;

use PDO;

class Connetion
{

    private static $connection = null;

    public static function getConnection()
    {
        if(empty(self::$connection)){
            self::$connection = new PDO("mysql:host=localhost;dbname=aburacar", "root", "compuforte", [
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ
            ]);
        }

        return self::$connection;
    }
}
?>