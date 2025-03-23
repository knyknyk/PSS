
<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/config.php';


$kwota = $_REQUEST['kwota'];
$lata = $_REQUEST['lata'];
$oprocentowanie = $_REQUEST['oprocentowanie'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
// sprawdzenie, czy parametry zostały przekazane
if (!isset($kwota) || !isset($lata) || !isset($oprocentowanie)) {
    //sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
    $messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ($kwota == "") {
    $messages[] = 'Nie podano kwoty';
}
if ($lata == "") {
    $messages[] = 'Nie podano lat';
}
if ($oprocentowanie == "") {
    $messages[] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty($messages)) {

    // sprawdzenie, czy $kwota i $lata są liczbami całkowitymi
    if (!is_numeric($kwota)) {
        $messages[] = 'Kwota nie jest liczbą całkowitą';
    }
    if (!is_numeric($lata)) {
        $messages[] = 'Lata nie są liczbą całkowitą';
    }
    if (!is_numeric($oprocentowanie)) {
        $messages[] = 'Oprocentowanie nie jest liczbą całkowitą';
    }
}

// 3. wykonaj zadanie jeśli wszystko w porządku
if (empty($messages)) { // gdy brak błędów

    //konwersja parametrów na int
    $kwota = intval($kwota);
    $lata = intval($lata);
    $oprocentowanie = intval($oprocentowanie);

    //wykonanie operacji
    $result = ($kwota + $kwota * $oprocentowanie / 100) / ($lata * 12);
}
include 'Calcview.php';