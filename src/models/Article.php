<?php

namespace src\models;

use src\services\Db;

class Article extends ActiveRecordEntity {

    protected $author_id;
    protected $name;
    protected $text;
    protected $created_at;


    protected static function getTableName(): string {
        return 'articles';
    }

    public function getName():string {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setText($text) {
        $this->text = $text;
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

    public function setAuthorId($authorId) {
        $this->author_id = $authorId;
    }

    public function getAuthor(): User {
        return User::getById($this->author_id);
    }

    public function updateFromArray(array $fields) { // : Article
        // $this->setName($fields['name']);
        // $this->setText($fields['text']);
        $this->name = $fields['name'];
        $this->text = $fields['text'];

        $this->save();
    }
    
    // public static function findAll():array {
    //     $db = new Db();
    //     return $db->query('SELECT * FROM `articles`;', [], static::class);
    // }
}
?>