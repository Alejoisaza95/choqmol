<?php

require_once ("Nave.php");

class Lanzadera extends Nave{

    protected $empuje;
    function __constructor($empuje){
        $this->empuje = $empuje;
    }
    
	/**
	 * @return mixed
	 */
	function getEmpuje() {
		return $this->empuje;
	}
	
	/**
	 * @param mixed $empuje 
	 * @return Nave
	 */
	function setEmpuje($empuje): self {
		$this->empuje = $empuje;
		return $this;
	}
}