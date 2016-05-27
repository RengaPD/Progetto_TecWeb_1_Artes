<?php

class Application_Resource_Utenti extends Zend_Db_Table_Abstract
{
    protected $_name    = 'Utenti';
    protected $_primary  = 'email';
    protected $_rowClass = 'Application_Resource_Utenti_Item';

	public function init()
    {
    }
    
    public function insertUtenti($info)
    {
    	$this->insert($info);
    }
	public function editUtenti($info)
	{
		$this->update('utenti',$info,$where);
	}
    public function showUtenti()
    {
        $select=$this->select()->order('Nome');
        $res=$this->fetchAll($select);
        return $res;
        
    }
}

