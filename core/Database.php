<?php

namespace core;

use config\DB;

/**
 * Class Database
 * @package core
 *
 * @property \PDO $_instance
 */
class Database
{
    /**
     * Instance.
     * @var \PDO|null
     */
    private static $_instance = null;

    /**
     * Database constructor. Private.
     */
    private function __construct () {

        $this->_instance = new \PDO(
            'mysql:host=' . DB::DB_HOST . ';dbname=' . DB::DB_NAME,
            DB::DB_LOGIN,
            DB::DB_PASS,
            [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]
        );

    }

    /**Singleton block**/
    private function __clone () {}
    /**Singleton block**/
    private function __wakeup () {}

    /**
     * Get instance.
     * @return \PDO
     */
    public static function getInstance()
    {
        if (self::$_instance != null) {
            return self::$_instance;
        }

        return (new self)->_instance;
    }

    public function query($query){
        $this->_instance->query($query);
    }
}