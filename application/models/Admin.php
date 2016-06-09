<?php

class Application_Model_Admin extends App_Model_Abstract
{ 

	public function __construct()
    {
		
    }
    
    public function inserisciPlanimetrie($info)
    {
    	return $this->getResource('Planimetria')->insertMap($info);
    }
	public function eliminaPlanimetrie()
	{
		
	}
	public function inserisciUtente($info)
	{
		return $this->getResource('Utenti')->insertUtenti($info);
	}
	public function modificaUtente($info,$id)
	{
		return $this->getResource('Utenti')->editUtenti($info,$id);
	}
	public function eliminaUtente($info)
	{
		    		return $this->getResource('Utenti')->deleteUtentedaID($info);

	}
	public function assegnaPlanimetrie()
	{
		
	}
	public function visualizzaUtente()
	{
		return $this->getResource('Utenti')->showUtenti();
	}
	public function visualizzaUtentedaID($info)
    	{
    		return $this->getResource('Utenti')->showUtentedaID($info);
    	}
public function trovaEmailUtente($info)
	{
		return $this->getResource('Utenti')->findUserEmail($info);
	}
}