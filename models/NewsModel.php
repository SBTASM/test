<?php

namespace models;

use core\Model;

class NewsModel extends Model{

    public $id, $title, $content, $created_at, $admin_id;

    protected $tableName = 'news';
    protected $columns = ['id', 'title', 'content', 'created_at', 'admin_id'];
}