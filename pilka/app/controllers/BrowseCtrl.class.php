<?php
namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\BrowseForm;

class BrowseCtrl {
    private $form;
    private $leagues;
    private $clubs;
    private $players;

    public function __construct() {
        $this->form = new BrowseForm();
    }

    public function validate() {
        $this->form->query = ParamUtils::getFromRequest('search_query');
        return !App::getMessages()->isError();
    }

    public function action_browse() {
        $this->validate();
        $q = $this->form->query;

        try {
            $this->leagues = App::getDB()->select("league", "*");

            $this->clubs = App::getDB()->select("club", "*", [
                "OR" => [
                    "club_name[~]" => $q,
                    "city[~]" => $q
                ],
                "ORDER" => "club_name"
            ]);

            $this->players = App::getDB()->select("players", "*", [
                "OR" => [
                    "first_name[~]" => $q,
                    "last_name[~]" => $q,
                    "position[~]" => $q
                ],
                "ORDER" => "last_name"
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd podczas pobierania danych z bazy.");
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('leagues', $this->leagues);
        App::getSmarty()->assign('clubs', $this->clubs);
        App::getSmarty()->assign('players', $this->players);
        App::getSmarty()->display("Browse.tpl");
        
    }
}
