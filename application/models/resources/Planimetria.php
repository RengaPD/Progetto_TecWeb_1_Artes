<?php

class Application_Resource_Planimetria extends Zend_Db_Table_Abstract
{
    protected $_name    = 'planimetrie';
    protected $_primary  = 'nomeplan';
    protected $_rowClass = 'Application_Resource_Planimetria_Item';

	public function init()
    {
    }
    
    public function insertMap($info)
    {
    	$this->insert($info);
    }
}

