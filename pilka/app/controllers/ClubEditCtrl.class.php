<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\ClubEditForm;

class ClubEditCtrl {

    private $form;

    public function __construct() {
        $this->form = new ClubEditForm();
    }

    public function validateSave() {
        $this->form->id_club = ParamUtils::getFromRequest('id_club');
        $this->form->club_name = ParamUtils::getFromRequest('club_name');
        $this->form->number_of_players = ParamUtils::getFromRequest('number_of_players');
        $this->form->city = ParamUtils::getFromRequest('city');
        $this->form->stadium = ParamUtils::getFromRequest('stadium');
        $this->form->league_position = ParamUtils::getFromRequest('league_position');
        $this->form->id_league = ParamUtils::getFromRequest('id_league');

        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->id_club = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_clubNew() {
        $this->generateView();
    }

    public function action_clubEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("club", "*", ["id_club" => $this->form->id_club]);
                if ($record) {
                    $this->form = (object)$record;
                }
            } catch (\PDOException $e) {
                Utils::addErrorMessage("Błąd przy pobieraniu danych klubu.");
            }
        }
        $this->generateView();
    }

    public function action_clubDelete() {
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("club", ["id_club" => $this->form->id_club]);
                Utils::addInfoMessage("Usunięto klub.");
            } catch (\PDOException $e) {
                Utils::addErrorMessage("Błąd przy usuwaniu klubu.");
            }
        }
        App::getRouter()->forwardTo("clubList");
    }

    public function action_clubSave() {
        if ($this->validateSave()) {
            try {
                if ($this->form->id_club == '') {
                    App::getDB()->insert("club", [
                        "club_name" => $this->form->club_name,
                        "number_of_players" => $this->form->number_of_players,
                        "city" => $this->form->city,
                        "stadium" => $this->form->stadium,
                        "league_position" => $this->form->league_position,
                        "id_league" => $this->form->id_league,
                    ]);
                } else {
                    App::getDB()->update("club", [
                        "club_name" => $this->form->club_name,
                        "number_of_players" => $this->form->number_of_players,
                        "city" => $this->form->city,
                        "stadium" => $this->form->stadium,
                        "league_position" => $this->form->league_position,
                        "id_league" => $this->form->id_league,
                    ], ["id_club" => $this->form->id_club]);
                }
                Utils::addInfoMessage("Zapisano dane klubu.");
            } catch (\PDOException $e) {
                Utils::addErrorMessage("Błąd przy zapisie klubu.");
            }
            App::getRouter()->forwardTo("clubList");
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('ClubEdit.tpl');
    }
}
