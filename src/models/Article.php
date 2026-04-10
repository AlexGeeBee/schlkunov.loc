<?php

namespace src\models;

use src\services\Db;
use src\exceptions\InvalidArgumentException;

class Article extends ActiveRecordEntity {

    protected $author_id;
    protected $name;
    protected $text;
    protected $created_at;
    protected $img;


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

    public function getImg() {
        return $this->img;
    }

    public function updateFromArray(array $fields, array $imgFile): Article {
        
        if (empty($fields['name'])) {
            throw new \InvalidArgumentException('Не передано название статьи');
        }
        if (empty($fields['text'])) {
            throw new \InvalidArgumentException('Не передан текст статьи');
        }
        if ($imgFile['size'] > 1024*1024*1024*10) {
            throw new \InvalidArgumentException('Файл должен быть не более 10 Мб');
        }

        $this->name = $fields['name'];
        $this->text = $fields['text'];

        if (!empty($imgFile['name'])) {

            $filePath = 'uploads/' . $imgFile['name'];
            $this->img = $filePath;

            if (!move_uploaded_file($imgFile['tmp_name'], $filePath)) {
                throw new InvalidArgumentException('Ошибка при загрузке файла');
            }
        }

        $this->save();
        return $this;

    }
    

    public static function create(array $fields, array $imgFile, User $author): Article {
        if (empty($fields['name'])) {
            throw new \InvalidArgumentException('Не передано название статьи');
        }
        if (empty($fields['text'])) {
            throw new \InvalidArgumentException('Не передан текст статьи');
        }
        if ($imgFile['size'] > 1024*1024*1024*10) {
            throw new \InvalidArgumentException('Файл должен быть не более 10 Мб');
        }

        $article = new Article();
        $article->name = $fields['name'];
        $article->text = $fields['text'];
        $article->author_id = $author->getId();

        if (!empty($imgFile['name'])) {

            $filePath = 'uploads/' . $imgFile['name'];
            $article->img = $filePath;

            if (!move_uploaded_file($imgFile['tmp_name'], $filePath)) {
                throw new InvalidArgumentException('Ошибка при загрузке файла');
            }
        }

        $article->save();
        return $article;
    }

    public static function searchByName(string $searchString): ?array {
        return parent::search('name', $searchString);
    }

    // public static function findAll():array {
    //     $db = new Db();
    //     return $db->query('SELECT * FROM `articles`;', [], static::class);
    // }
}
?>