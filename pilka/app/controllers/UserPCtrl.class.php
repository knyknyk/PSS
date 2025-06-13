<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\UserEform;

class UserPCtrl {

    private $form;

    public function __construct() {
        $this->form = new UserEform();
    }

    public function action_userPanel() {
        $id = SessionUtils::load('id_user', true);
        if (!$id) {
            Utils::addErrorMessage('Musisz się zalogować');
            App::getRouter()->redirectTo('loginShow');
        }

        $user = App::getDB()->get('users', '*', ['id_user' => $id]);
        App::getSmarty()->assign('user', $user);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('UserP.tpl');
    }

    public function action_userSave() {
        $id = SessionUtils::load('id_user', true);
        $this->form->login    = ParamUtils::getFromRequest('login');
        $this->form->email    = ParamUtils::getFromRequest('email');
        $this->form->password = ParamUtils::getFromRequest('password');

        $data = [
            'login' => $this->form->login,
            'email' => $this->form->email
        ];
        if (!empty($this->form->password)) {
            $data['password'] = password_hash($this->form->password, PASSWORD_DEFAULT);
        }

        try {
            App::getDB()->update('users', $data, ['id_user' => $id]);
            Utils::addInfoMessage('Zapisano zmiany');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd przy zapisie');
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

        App::getRouter()->redirectTo('userPanel');
    }
}
