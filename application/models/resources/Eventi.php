<?php

class Application_Resource_Eventi extends Zend_Db_Table_Abstract
{
    protected $_name    = 'eventi';
    protected $_primary  = 'id';
    protected $_rowClass = 'Application_Resource_Eventi_Item';

    public function init()
    {
    }

    public function insertEventi($info)
    {
        $this->insert($info);

    }
    public function getEventi()
    {
        $select=$this->select()->order('timestamp');
        $res=$this->fetchAll($select);
        return $res;
    }
}