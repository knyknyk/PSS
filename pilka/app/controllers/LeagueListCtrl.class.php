<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class LeagueListCtrl {

    private $form; // dane formularza (opcjonalnie, jeśli będzie filtracja w przyszłości)
    private $records; // rekordy z bazy danych

    public function validate() {
        // Tu można dodać walidację np. wyszukiwania po nazwie ligi, ale teraz zostawiamy puste
        return !App::getMessages()->isError();
    }

    public function action_leagueList() {
        $this->validate();

        try {
            $this->records = App::getDB()->select("league", [
                "id_league",
                "league_name",
                "number_of_clubs",
                "country"
            ], [
                "ORDER" => "league_name"
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd pobierania danych z bazy!');
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('leagues', $this->records);
        App::getSmarty()->display('LeagueList.tpl');
    }
}
