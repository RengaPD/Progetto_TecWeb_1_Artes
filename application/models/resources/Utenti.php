<?php
class Application_Resources_Utenti extends Zend_Db_Table_Abstract
{
    protected $_name ='Utenti'
    protected $_primary ='e-mail'
    protected $_rowClass ='Application_Resources_Utenti_Item'
    
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }
    public function insertUtenti($info)
    {
        $this->insert($info)
        
    }
        
}