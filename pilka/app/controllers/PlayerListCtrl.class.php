<?php
namespace app\controllers;

use core\App;
use core\Utils;

class PlayerListCtrl {

    private $records; // lista zawodników

    public function action_playerList() {
        try {
            $this->records = App::getDB()->select("players", [
                "id_player",
                "first_name",
                "last_name",
                "age",
                "position",
                "height",
                "date_of_birth",
                "id_team",
                "goals"
            ], [
                "ORDER" => "last_name"
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd pobierania danych zawodników z bazy!");
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('players', $this->records);
        App::getSmarty()->display('playerList.tpl');
    }
}
