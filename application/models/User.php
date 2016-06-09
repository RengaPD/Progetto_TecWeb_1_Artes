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
	public function resettaPosizione()
	{
		
	}
	
}