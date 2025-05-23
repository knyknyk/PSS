
<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';
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

		if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano liczby 1');
		}
		if ($this->form->lata == "") {
			$this->msgs->addError('Nie podano liczby 2');
		}
		if ($this->form->oprocentowanie == "") {
			$this->msgs->addError('Nie podano liczby 3');
		}
		if (! $this->msgs->isError()) {
			if (! is_numeric ( $this->form->kwota )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}
                        if (! is_numeric ( $this->form->oprocentowanie )) {
				$this->msgs->addError('trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}

	public function process(){

		$this->getparams();
		
		if ($this->validate()) {

			$this->form->kwota = intval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
                        $this->form->oprocentowanie = intval($this->form->oprocentowanie);
			$this->msgs->addInfo('Parametry poprawne.');
			$this->result->result  = ($this->form->kwota + ($this->form->lata * $this->form->oprocentowanie) / 100) / ($this->form->lata * 12);	
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator kredytowy');
		$smarty->assign('page_description','...');
		$smarty->assign('page_header','kredytowy');
				
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}
