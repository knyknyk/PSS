<?php

namespace app\controllers;

use core\App;
use core\Utils;

class MatchListCtrl {

    public $matches = [];

    public function action_matchList() {
        $this->matches = $this->getMatchesFromDB();

        if (empty($this->matches)) {
            $this->generateRandomMatches();
            $this->matches = $this->getMatchesFromDB();
        }

        $this->generateView();
    }

    public function action_simulateMatches() {
        try {
            $matches = App::getDB()->select("match", ["id_match"]);
            foreach ($matches as $match) {
                App::getDB()->update("match", [
                    "home_goals" => rand(0, 5),
                    "away_goals" => rand(0, 5)
                ], [
                    "id_match" => $match["id_match"]
                ]);
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd bazy danych: " . $e->getMessage());
        }
        Utils::addInfoMessage("Mecze zostały zasymulowane.");
        App::getRouter()->redirectTo("matchList");
    }

    public function action_resetMatches() {
        try {
            App::getDB()->delete("match", []);
            $this->generateRandomMatches();
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd bazy danych: " . $e->getMessage());
        }
        Utils::addInfoMessage("Mecze zostały przelosowane.");
        App::getRouter()->redirectTo("matchList");
    }

    private function getMatchesFromDB() {
        return App::getDB()->select("match", [
            "[>]club(home)" => ["id_club_home" => "id_club"],
            "[>]club(away)" => ["id_club_away" => "id_club"],
            "[>]league" => ["id_league" => "id_league"]
        ], [
            "match.id_match",
            "match.id_club_home",
            "match.id_club_away",
            "match.id_league",
            "match.home_goals",
            "match.away_goals",
            "match.match_date",
            "home.club_name(home_name)",
            "away.club_name(away_name)",
            "league.league_name"
        ]);
    }

    private function generateRandomMatches() {
        try {
            $clubs = App::getDB()->select("club", [
                "[>]league" => ["id_league" => "id_league"]
            ], [
                "club.id_club",
                "club.club_name",
                "club.id_league",
                "league.league_name"
            ]);

            $clubsByLeague = [];
            foreach ($clubs as $club) {
                $clubsByLeague[$club['id_league']][] = $club;
            }

            foreach ($clubsByLeague as $id_league => $leagueClubs) {
                shuffle($leagueClubs);
                for ($i = 0; $i + 1 < count($leagueClubs); $i += 2) {
                    App::getDB()->insert("match", [
                        "id_club_home" => $leagueClubs[$i]['id_club'],
                        "id_club_away" => $leagueClubs[$i + 1]['id_club'],
                        "id_league" => $id_league,
                        "match_date" => date('Y-m-d H:i:s'),
                        "home_goals" => null,
                        "away_goals" => null
                    ]);
                }
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage("Błąd przy losowaniu meczów: " . $e->getMessage());
        }
    }

    public function generateView() {
        App::getSmarty()->assign('matches', $this->matches);
        App::getSmarty()->display("MatchListView.tpl");
    }
}