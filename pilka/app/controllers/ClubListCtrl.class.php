<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;

class ClubListCtrl {

    private $form; // dane formularza (opcjonalnie, jeśli będzie filtracja w przyszłości)
    private $records; // rekordy z bazy danych

    public function validate() {
        // Tu można dodać walidację np. wyszukiwania po nazwie ligi, ale teraz zostawiamy puste
        return !App::getMessages()->isError();
    }

    public function action_clubList() {
        $this->validate();

        try {
            $this->records = App::getDB()->select("club", [
                "club_name",
                "id_club",
                "number_of_players",
                "city",
                "stadium",
                "league_position",
                "id_league"
            ], [
                "ORDER" => "club_name"
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd pobierania danych z bazy!');
            if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('club', $this->records);
        App::getSmarty()->display('clubList.tpl');
    }
}
