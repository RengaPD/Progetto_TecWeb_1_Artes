<?php

class Application_Model_User extends App_Model_Abstract
{ 

	public function __construct()
    {
		
    }
    
	public function segnalaEvento()
	{
		return $this->getResource('Eventi')->insertEventi($info);

	}
	public function aggiungiPosizione()
	{
		
	}
	
	public function visualizzaEdifici()
	{
		return $this->getResource('Edifici')->getEdifici();


	}
	public function posizioniDaEdificio($info)
	{
		return $this->getResource('Posizioni')->getpositionsbyEd($info);

	}
	public function  edificiodaID($info)
	{
		return $this->getResource('Edifici')->getedificiobyId($info);

	}
	public function visualizzaUtentedaID($info)
	{
		return $this->getResource('Utenti')->showUtentedaID($info);
	}
	public function modificaUtente($info,$id)
	{
		return $this->getResource('Utenti')->editUtenti($info,$id);
	}
	public function resettaPosizione($id)
	{
		return $this->getResource('Utenti')->clearPosition($id);
	}
}