<?php
require_once dirname (__FILE__).'/../config.php';

//1. pobranie nazwy akcji
$action = isset ($_REQUEST['action']) ? $_REQUEST['action'] : '';

//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	case 'action1' :
	break;
	case 'action2' :
	break;
}
