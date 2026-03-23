<?php

namespace src\models;

use src\services\Db;

class Users extends ActiveRecordEntity {

    protected $nickname;
    protected $email;
    protected $is_confirmed;
    protected $role;
    protected $password_hash;
    protected $auth_token;
    protected $created_at;

    protected static function getTableName(): string {
        return 'users';
    }

    public function getNickname():string {
        return $this->nickname;
    }

    public function getEmail():string {
        return $this->email;
    }

    public function getIsConfirmed():string {
        return $this->is_confirmed;
    }

    public function getRole():string {
        return $this->role;
    }

    public function getPasswordHash():string {
        return $this->password_hash;
    }
    
    public function getAuthToken():string {
        return $this->auth_token;
    }

    public function getCreatedAt():string {
        return $this->created_at;
    }

}

?>