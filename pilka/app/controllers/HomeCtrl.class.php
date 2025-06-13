<?php
namespace app\controllers;

use core\App;
use core\SessionUtils;
use core\Utils;
class HomeCtrl {
    public function action_home() {
         try {
            $leagues = App::getDB()->select("league", ["id_league", "league_name"]);
        } catch (\PDOException $e) {
            $leagues = [];
            Utils::addErrorMessage("Błąd pobierania lig.");
        }
        App::getSmarty()->assign('leagues', $leagues);
        $user = SessionUtils::load("user", true);
        App::getSmarty()->assign("user", $user);
        App::getSmarty()->display("Home.tpl");
        
    }
}


