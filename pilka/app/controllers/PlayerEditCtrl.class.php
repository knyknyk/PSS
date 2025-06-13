<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\PlayerEditForm;

class PlayerEditCtrl {

    private $form;

    public function __construct() {
        $this->form = new PlayerEditForm();
    }

    public function validateSave() {
        $this->form->id_player = ParamUtils::getFromRequest('id_player');
        $this->form->first_name = ParamUtils::getFromRequest('first_name');
        $this->form->last_name = ParamUtils::getFromRequest('last_name');
        $this->form->age = ParamUtils::getFromRequest('age');
        $this->form->position = ParamUtils::getFromRequest('position');
        $this->form->height = ParamUtils::getFromRequest('height');
        $this->form->date_of_birth = ParamUtils::getFromRequest('date_of_birth');
        $this->form->id_team = ParamUtils::getFromRequest('id_team');
        $this->form->goals = ParamUtils::getFromRequest('goals');

        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->id_player = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_playerNew() {
        $this->generateView();
    }

    public function action_playerEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("players", "*", ["id_player" => $this->form->id_player]);
                if ($record) {
                    $this->form = (object)$record;
                }
            } catch (\PDOException $e) {
                Utils::addErrorMessage("Błąd przy pobieraniu danych zawodnika.");
            }
        }
        $this->generateView();
    }

    public function action_playerDelete() {
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("players", ["id_player" => $this->form->id_player]);
                Utils::addInfoMessage("Usunięto zawodnika.");
            } catch (\PDOException $e) {
                Utils::addErrorMessage("Błąd przy usuwaniu zawodnika.");
            }
        }
        App::getRouter()->forwardTo("playerList");
    }

    public function action_playerSave() {
        if ($this->validateSave()) {
            try {
                if ($this->form->id_player == '') {
                    App::getDB()->insert("players", [
                        "first_name" => $this->form->first_name,
                        "last_name" => $this->form->last_name,
                        "age" => $this->form->age,
                        "position" => $this->form->position,
                        "height" => $this->form->height,
                        "date_of_birth" => $this->form->date_of_birth,
                        "id_team" => $this->form->id_team,
                        "goals" => $this->form->goals,
                    ]);
                } else {
                    App::getDB()->update("players", [
                        "first_name" => $this->form->first_name,
                        "last_name" => $this->form->last_name,
                        "age" => $this->form->age,
                        "position" => $this->form->position,
                        "height" => $this->form->height,
                        "date_of_birth" => $this->form->date_of_birth,
                        "id_team" => $this->form->id_team,
                        "goals" => $this->form->goals,
                    ], ["id_player" => $this->form->id_player]);
                }
                Utils::addInfoMessage("Zapisano dane zawodnika.");
            } catch (\PDOException $e) {
                Utils::addErrorMessage("Błąd przy zapisie zawodnika.");
            }
            App::getRouter()->forwardTo("playerList");
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('PlayerEdit.tpl');
    }
}
