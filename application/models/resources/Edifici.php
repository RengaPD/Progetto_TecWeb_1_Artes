<?php

class Application_Resource_Edifici extends Zend_Db_Table_Abstract
{
    protected $_name = 'edifici';
    protected $_primary = 'id';
    protected $_rowClass = 'Application_Resource_Edifici_Item';

    public function init()
    {
    }

    public function insertEdifici($info)
    {

    }

    public function getEdifici()
    {
        $select = $this->select();
        $res = $this->fetchAll($select);
        return $res;
    }
    public function getedificiobyId($info)
    {
        $select = $this->select('nome')->where('id =?', (int)$info);
        $res = $this->fetchAll($select);
        return $res;
    }
}