
<?php
require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

class CalcCtrl {
	private $msgs;   
	private $form;   
	private $result; 
	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
	}
	
	public function validate() {
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->lata ) && isset ( $this->form->oprocentowanie ))) {
			
			return false; 
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano wartości pierwszej');
		}
		if ($this->form->lata == "") {
			$this->msgs->addError('Nie podano wartości drugiej');
		}
		if ($this->form->oprocentowanie == "") {
			$this->msgs->addError('Nie podano wartości trzeciej');
		}
		if (! $this->msgs->isError()) {
			if (! is_numeric ( $this -> form -> kwota )) {
				$this->msgs->addError('pierwsza wartość musi być całkowita');
			}
			
			if (! is_numeric ( $this -> form -> lata )) {
				$this->msgs->addError('druga wartość musi być całkowita');
			}
                        if (! is_numeric ( $this -> form -> oprocentowanie )) {
				$this->msgs->addError('trzecia wartość musi być całkowita');
			}
		}
		
		return ! $this->msgs->isError();
	}
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this-> form -> kwota = intval($this -> form -> kwota);
			$this-> form -> lata = intval($this -> form -> lata);
            $this-> form -> oprocentowanie = intval($this -> form -> oprocentowanie);
			$this-> msgs -> addInfo('Parametry prawidłowe.');
			$this-> result -> result  = ($this -> form -> kwota + ($this -> form -> lata * $this -> form -> oprocentowanie) / 100) / ($this -> form -> lata * 12);	
			$this-> msgs -> addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	public function generateView(){
		getSmarty()->assign('page_title','zadanie 05a');
		getSmarty()->assign('page_description','Zmiana w postaci nowej struktury foderów, skryptu inicjalizacji oraz pomocniczych funkcji.');
		getSmarty()->assign('page_header','...................');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.html'); 
	}
}