<?php

namespace core;

use config\DB;
use exceptions\DataBaseException;
use PDO;

abstract class Model{
    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $key => $val){
            if(property_exists($this, $key) === true){
                $this->$key = $val;
            }
        }
    }

    protected $tableName = null;
    protected $columns = [];

    /**
     * Simple delete row(where).
     * @return bool
     * @throws DataBaseException
     */
    public function delete(){
        $id_column = "id";
        $db = Database::getInstance();

        if(empty($this->$id_column) === true){
            throw new DataBaseException('id = null. Deleting impossible!');
        }

        $tableName = self::getTableName();
        $query = $db->prepare("DELETE FROM $tableName WHERE `id` = :id");
        if($query->execute(['id' => $this->$id_column]) === false){
            return false;
        }

        return true;
    }

    /**
     * Update exist record or save new record.
     * @return boolean
     */
    public function save(){
        $id_column = "id";
        $called = self::getCalledObject();
        $tableName = $called->getTableName();
        $columns = implode(',',self::getModelColumns());
        $db = Database::getInstance();

        $params = [];
        $values = [];
        foreach($this->columns as $column){

            if(empty($this->$id_column) === true){
                array_push($params, '?');
            }else{
                array_push($params, "`$column` = ?");
            }

            array_push($values, $this->$column);
        }

        if(empty($this->$id_column) === false){
            $params = array_reverse($params);
            array_pop($params);
            $params = array_reverse($params);
        }

        if(empty($this->$id_column) === false){
            $values = array_reverse($values);
            array_pop($values);
            $values = array_reverse($values);
            array_push($values, $this->$id_column);
        }

        $params = implode(',', $params);

        /**Update or Save model**/
        if(empty($this->$id_column) === true){
            $query = $db->prepare("INSERT INTO $tableName($columns) VALUE($params)");
        }else{
            $query = $db->prepare("UPDATE `$tableName` SET $params WHERE `id` = ?");
        }

        if($query->execute($values) === false){
            return false;
        };

        return true;
    }

    /**
     * Simple find(where).
     * @param $column string
     * @param $value string
     * @param string $operator
     * @return array|bool|null
     */
    public static function find($column = null, $value = null, $operator = '='){
        $db = Database::getInstance();

        $called_object = self::getCalledObject();
        $table_name = $called_object->getTableName();

        $columns = implode(',', self::getModelColumns());

        $query = null; $data = null;

        if(empty($column) === false && empty($value) === false){
            $query = $db->prepare("SELECT $columns FROM `$table_name` WHERE `$column` $operator :val");
            if($query->execute([':val' => $value]) === false){
                return false;
            }
        }else{
            $query = $db->query("SELECT $columns FROM `$table_name`");
        }

        $query->setFetchMode(PDO::FETCH_CLASS, get_called_class());
        $data = $query->fetchAll();
        $query->closeCursor();

        return $data;
    }

    public static function findAll($limit, $offset, $count = false){
        $db = Database::getInstance();

        $called_object = self::getCalledObject();
        $table_name = $called_object->getTableName();

        $columns = implode(',', self::getModelColumns());
        $query = null;

        if($count === false){
            $query = $db->prepare("SELECT $columns FROM `$table_name` LIMIT :limit OFFSET :offset");
            $query->bindValue(':limit', $limit, PDO::PARAM_INT);
            $query->bindValue(':offset', $offset, PDO::PARAM_INT);
        }else{
            $query = $db->prepare("SELECT COUNT(`id`) FROM `$table_name`");
        }

        if($query->execute() === false){
            return false;
        }

        if($count === false) {
            $query->setFetchMode(PDO::FETCH_CLASS, get_called_class());
        }else{
            $query->setFetchMode(PDO::FETCH_BOTH);
        }
        $data = $query->fetchAll();

        if($count === true){
            $count = array_pop($data);
            $data = intval(array_pop($count));
        }

        return $data;

    }

    /**
     * @return string
     */
    public function getTableName(){
        return $this->tableName;
    }

    /**
     * @return string[]
     */
    public function getColumns(){
        return $this->columns;
    }

    /**
     * @return Model
     */
    private static function getCalledObject(){
        $called_class = get_called_class();
        /**@var Model $called_object **/
        $called_object = new $called_class();

        return $called_object;
    }

    /**
     * @return string[]
     */
    private static function getModelColumns(){
        $called_object = self::getCalledObject();
        $columns = [];
        foreach($called_object->getColumns() as $db_column){
            array_push($columns, "`$db_column`");
        }

        return $columns;
    }
}