<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\LeagueEditForm;

class LeagueEditCtrl {

    private $form;

    public function __construct() {
        $this->form = new LeagueEditForm();
    }

    public function validateSave() {
        $this->form->id_league = ParamUtils::getFromRequest('id_league', true, 'Błędne wywołanie aplikacji');
        $this->form->league_name = ParamUtils::getFromRequest('league_name', true, 'Błędne wywołanie aplikacji');
        $this->form->number_of_clubs = ParamUtils::getFromRequest('number_of_clubs', true, 'Błędne wywołanie aplikacji');
        $this->form->country = ParamUtils::getFromRequest('country', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError()) return false;

        if (empty(trim($this->form->league_name))) {
            Utils::addErrorMessage('Wprowadź nazwę ligi');
        }
        if (empty(trim($this->form->number_of_clubs))) {
            Utils::addErrorMessage('Wprowadź liczbę klubów');
        }
        if (empty(trim($this->form->country))) {
            Utils::addErrorMessage('Wprowadź kraj');
        }

        return !App::getMessages()->isError();
    }

    public function validateEdit() {
        $this->form->id_league = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_leagueNew() {
        $this->generateView();
    }

    public function action_leagueEdit() {
        if ($this->validateEdit()) {
            try {
                $record = App::getDB()->get("league", "*", [
                    "id_league" => $this->form->id_league
                ]);

                $this->form->id_league = $record['id_league'];
                $this->form->league_name = $record['league_name'];
                $this->form->number_of_clubs = $record['number_of_clubs'];
                $this->form->country = $record['country'];

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_leagueDelete() {
        if ($this->validateEdit()) {
            try {
                App::getDB()->delete("league", [
                    "id_league" => $this->form->id_league
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto ligę');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd podczas usuwania ligi');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }
        }

        App::getRouter()->forwardTo('leagueList');
    }

    public function action_leagueSave() {
        if ($this->validateSave()) {
            try {
                if (empty($this->form->id_league)) {
                    App::getDB()->insert("league", [
                        "league_name" => $this->form->league_name,
                        "number_of_clubs" => $this->form->number_of_clubs,
                        "country" => $this->form->country
                    ]);
                } else {
                    App::getDB()->update("league", [
                        "league_name" => $this->form->league_name,
                        "number_of_clubs" => $this->form->number_of_clubs,
                        "country" => $this->form->country
                    ], [
                        "id_league" => $this->form->id_league
                    ]);
                }

                Utils::addInfoMessage('Pomyślnie zapisano ligę');

            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd zapisu do bazy');
                if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
            }

            App::getRouter()->forwardTo('leagueList');
        } else {
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('LeagueEdit.tpl');
    }
}
