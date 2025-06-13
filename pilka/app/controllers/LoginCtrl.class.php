<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        if (!isset($this->form->login) || !isset($this->form->pass)) {
            return false;
        }

        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }

        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        if (App::getMessages()->isError()) {
            return false;
        }

        try {
            $user = App::getDB()->get("users", "*", ["login" => $this->form->login]);

            if ($user && password_verify($this->form->pass, $user['password'])) {
                SessionUtils::store('id_user', $user['id_user']);

                // Przypisanie roli na podstawie id_role
                if ($user["id_role"] == 1) {
                    RoleUtils::addRole('admin');
                } else {
                    RoleUtils::addRole('user');
                }

                Utils::addInfoMessage('Zalogowano pomyślnie');
                return true; // ważne: nie przekierowuj tutaj!
            } else {
                Utils::addErrorMessage("Niepoprawny login lub hasło");
                return false;
            }

        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd podczas logowania do bazy.");
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            return false;
        }
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            // Zalogowany poprawnie
            Utils::addInfoMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("home");
        } else {
            // Niepoprawne dane logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        session_destroy();
        App::getRouter()->redirectTo('home');
    }

    public function generateView() {
        App::getSmarty()->assign('RoleUtils', new \core\RoleUtils());

        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('LoginView.tpl');
        
    }
}
