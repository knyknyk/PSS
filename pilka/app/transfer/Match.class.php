<?php

namespace app\transfer;

class MatchData{
    public $id_match;
    public $id_club_home;
    public $id_club_away;
    public $home_goals;
    public $away_goals;
    public $id_league;
    public $match_date;

    public function __construct($id_match, $id_club_home, $id_club_away, $home_goals, $away_goals, $id_league, $match_date) {
        $this->id_match = $id_match;
        $this->id_club_home = $id_club_home;
        $this->id_club_away = $id_club_away;
        $this->home_goals = $home_goals;
        $this->away_goals = $away_goals;
        $this->id_league = $id_league;
        $this->match_date = $match_date;
    }
}
