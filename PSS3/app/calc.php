<?php
require_once dirname(__FILE__).'/../config.php';
function getParams(&$kwota,&$lata,&$oprocentowanie){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;     
}
function validate(&$kwota,&$lata,&$oprocentowanie,&$messages){
	if ( ! (isset($kwota) && isset($lata) && isset($oprocentowanie))) {

		return false;
	}

	if ( $kwota == "") {
		$messages [] = 'Nie podano kwoty';
	}
	if ( $lata == "") {
		$messages [] = 'Nie podano ilości lat';
	}
        if ($oprocentowanie == "") {
                $messages[] = 'Nie podano oprocentowania';
        }
        
	if (count ( $messages ) != 0) return false;

	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $lata )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
        if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'trzecia wartość nie jest liczbą całkowitą';
	}
	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota,&$lata,&$oprocentowanie,&$messages,&$result){
	global $role;

	$kwota = intval($kwota);
	$lata = intval($lata);
        $oprocentowanie = intval($oprocentowanie);
	//wykonanie operacji
    $result = ($kwota + $kwota * $oprocentowanie / 100) / ($lata * 12);
}
$kwota = null;
$lata = null;
$oprocentowanie = null;
$result = null;
$messages = array();

getParams($kwota,$lata,$oprocentowanie);
if ( validate($kwota,$lata,$oprocentowanie,$messages) ) {
	process($kwota,$lata,$oprocentowanie,$messages,$result);
}
$page_header = 'Proste szablony';
$page_footer = 'przykładowa tresć stopki wpisana do szablonu z kontrolera';

include 'calc_view.php';