<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\UserRegisterForm;

class RegisterCtrl {

    private $form;

    public function __construct() {
        $this->form = new UserRegisterForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->password = ParamUtils::getFromRequest('password');
        $this->form->password_confirm = ParamUtils::getFromRequest('password_confirm');
        $this->form->first_name = ParamUtils::getFromRequest('first_name');
        $this->form->last_name = ParamUtils::getFromRequest('last_name');

        if ($this->form->password !== $this->form->password_confirm) {
            Utils::addErrorMessage('Hasła nie są takie same');
            return false;
        }

        if (App::getDB()->has("users", ["login" => $this->form->login])) {
            Utils::addErrorMessage("Użytkownik o takim loginie już istnieje");
            return false;
        }

        return !App::getMessages()->isError();
    }

    public function action_registerShow() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('Register.tpl');
    }

    public function action_register() {
        if ($this->validate()) {
            App::getDB()->insert("users", [
                "login" => $this->form->login,
                "password" => password_hash($this->form->password, PASSWORD_DEFAULT),
                "email" => $this->form->email,
                "first_name" => $this->form->first_name,
                "last_name" => $this->form->last_name,
                "id_role" => 2 // np. 2 = zwykły użytkownik
            ]);

            Utils::addInfoMessage("Rejestracja zakończona pomyślnie. Możesz się teraz zalogować.");
            App::getRouter()->redirectTo("loginShow");
        } else {
            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->display('Register.tpl');
            
        }
    }
}
