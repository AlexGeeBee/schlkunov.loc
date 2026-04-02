<?php

namespace src\models;

use src\exceptions\InvalidArgumentException;

class User extends ActiveRecordEntity {

    protected $id;
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

    public function getId(): int {
        return $this->id;
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

    public static function signUp(array $userData) {
        
        if (empty($userData['login'])) {
            throw new InvalidArgumentException('Не передан логин');
        }
        if (empty($userData['email'])) {
            throw new InvalidArgumentException('Не передан адрес эл. почты');
        }
        if (empty($userData['password'])) {
            throw new InvalidArgumentException('Не передан пароль');
        }
        if (!preg_match('/^[a-zA-Z0-9]+$/', $userData['login'])) {
            throw new InvalidArgumentException('Логин должен содержать только символы латинского алфавита и цифры');
        }
        if (!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Некорректный адрес эл. почты');
        }
        if (mb_strlen($userData['password']) < 8) {
            throw new InvalidArgumentException('Пароль должен состоять из не менее 8 символов');
        }
        if (static::findOneByColumn('nickname', $userData['login']) !== null) {
            throw new InvalidArgumentException('Пользователь с таким логином уже существует');
        }
        if (static::findOneByColumn('email', $userData['email']) !== null) {
            throw new InvalidArgumentException('Пользователь с таким email уже существует');
        }


        $user = new User();
        $user->nickname = $userData['login'];
        $user->email = $userData['email'];
        $user->password_hash = password_hash($userData['password'], PASSWORD_DEFAULT);
        $user->is_confirmed = true;
        $user->role = 'user';
        $user->auth_token = sha1(random_bytes(100)) . sha1(random_bytes(100));
        $user->refreshAuthToken();

        $user->save();

        return $user;
    }

    public static function logIn(array $logInData) :User {

        if (empty($logInData['login'])) {
            throw new InvalidArgumentException('Не передан логин');
        }
        if (empty($logInData['password'])) {
            throw new InvalidArgumentException('Не передан пароль');
        }
        $user = static::findOneByColumn('nickname', $logInData['login']);
        
        if($user === null){
            throw new InvalidArgumentException('Неправильный логин');
        }
        if(!password_verify($logInData['password'], $user->getPasswordHash())){
            throw new InvalidArgumentException('Неправильный пароль');
        }
        $user->refreshAuthToken();
        $user->save();
        return $user;
    }

    public function refreshAuthToken()
    {    
        $this->auth_token = sha1(random_bytes(100)) . sha1(random_bytes(100)) . sha1(random_bytes(100));   
    }
}

?>