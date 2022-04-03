<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';
// wzorowanie na przykladzie kontrolera kalkulatora
// @author Przemysław Kudłacik

class CalcCtrl {

	private $msgs;   
	private $form;   
	private $result; 

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
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
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->lata ) && isset ( $this->form->oprocentowanie ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->lata == "") {
			$this->msgs->addError('Nie podano liczby lat');
		}
		if ($this->form->oprocentowanie == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			
			if (! is_numeric ( $this->form->kwota )) {
				$this->msgs->addError('Kwota musi być liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				$this->msgs->addError('Liczba lat musi być liczbą całkowitą');
			}
			if (! is_numeric ( $this->form->oprocentowanie )) {
				$this->msgs->addError('Oprocentowanie musi być liczbą całkowitą');
			}
			
			if   ($this->form->kwota<=0){
				$this->msgs->addError('Kwota nie może wynosić zero');
			}
                        if   ($this->form->lata<=0){
                                $this->msgs->addError('Liczba lat nie może wynosić zero');
                                                }
			if  ($this->form->oprocentowanie<=0) {
				$this->msgs->addError('Oprocentowanie nie może wynosić zero');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota = intval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
			$this->form->oprocentowanie = intval($this->form->oprocentowanie);
			$this->msgs->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			$this->result->result =((($this->form->kwota) / (12 *  $this->form->lata)) * ($this->form->oprocentowanie / 100)) + ($this->form->kwota / (12 *$this->form->lata));
			$this->result->result  = round ($this->result->result, 2);
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}

	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc/calc.html');
	}
	
}



