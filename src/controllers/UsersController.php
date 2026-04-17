<?php

namespace src\controllers;

use src\models\User;
use src\models\UsersAuthService;
use src\exceptions\InvalidArgumentException;

class UsersController extends Controller {
    public function signUp() {

        if (!empty($_POST)) {

            try {
                $user = User::signUp($_POST);
            }
            catch (InvalidArgumentException $e) {
                $this->view->renderHtml('user/signUp.php', ['error' => $e->getMessage()]);
                return;
            }

            if ($user instanceof User) {
                $this->view->renderHtml('user/signUpSuccess.php');
                return;
            }
        }

        $this->view->renderHtml('user/signUp.php');
    }

    public function logIn() {
        if (!empty($_POST)) {
            try {
                $user = User::logIn($_POST);
                UsersAuthService::createToken($user);
                header('Location: /');
                exit();
            } 
            
            catch (invalidArgumentException $e) {
                $this->view->renderHtml('user/logIn.php', ['error' => $e->getMessage()]);
                return;
            }
        }

        $this->view->renderHtml('user/logIn.php');
        return;
    }

    public function logOut() {
        setcookie('token', '', -1, '/', '', false, true);
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }

    public function allUsers() {
        $users = User::findAll();
        $this->view->renderHTML('user/allUsers.php', ['users' => $users]);
    }
}