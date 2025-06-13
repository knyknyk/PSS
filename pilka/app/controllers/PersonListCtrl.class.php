<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\PersonSearchForm;

class PersonListCtrl {

    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych

    public function __construct() {

        $this->form = new PersonSearchForm();
    }

    public function validate() {

        $this->form->last_name = ParamUtils::getFromRequest('sf_surname');

        return !App::getMessages()->isError();
    }

    public function action_personList() {
        $this->validate();

        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->last_name) && strlen($this->form->last_name) > 0) {
            $search_params['surname[~]'] = $this->form->last_name . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        //dodanie frazy sortującej po nazwisku
        $where ["ORDER"] = "last_name";
        //wykonanie zapytania

        try {
            $this->records = App::getDB()->select("users", [
                "id_user",
                "first_name",
                "last_name",
               
                    ], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        // 4. wygeneruj widok
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('people', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('PersonList.tpl');
       
    }

}
