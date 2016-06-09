<?php

class Application_Model_Staff extends App_Model_Abstract
{ 

	public function __construct()
    {
		
    }
    
	public function visualizzaEventi()
	{
		return $this->getResource('Eventi')->getEventi();

	}
	public function visualizzaEdifici()
	{
		return $this->getResource('Edifici')->getEdifici();

	}
	public function inserisciEvento($info)
	{
		return $this->getResource('Eventi')->insertEventi($info);


	}
	public function deleteEvents()
	{
		
	}
	public function posizioniDaEdificio($info)
	{
		return $this->getResource('Posizioni')->getpositionsbyEd($info);

	}
	
}