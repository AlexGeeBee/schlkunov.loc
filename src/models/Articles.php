<?php

namespace src\models;

use src\services\Db;

class Articles extends ActiveRecordEntity {

    private $author_id;
    private $name;
    private $text;
    private $created_at;


    protected static function getTableName(): string {
        return 'articles';
    }

    public function getName():string {
        return $this->name;
    }

    public function getText():string {
        return $this->text;
    }

    public function getCreatedAt():string {
        return $this->created_at;
    }
    public function getAuthorId():string {
        return $this->author_id;
    }

    public function getAuthor(): Users {
        return Users::getById($this->author_id);
    }


    
    // public static function findAll():array {
    //     $db = new Db();
    //     return $db->query('SELECT * FROM `articles`;', [], static::class);
    // }
}
?>