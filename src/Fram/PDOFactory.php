<?php

namespace ADABlog\Fram;

class PDOFactory
{

    public static function getMysqlConnexion()
    {
        $db_host = $_ENV['DB_HOST'];
        $db_user = $_ENV['DB_USER'];
        $db_password = $_ENV['DB_PASSWORD'];
        $db_name = $_ENV['DB_NAME'];

        $dtb = new \PDO('mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8', $db_user, $db_password);
        $dtb->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return $dtb;
    }
}
