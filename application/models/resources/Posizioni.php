<?php

class Application_Resource_Edifici extends Zend_Db_Table_Abstract
{
    protected $_name = 'edifici';
    protected $_primary = 'id';
    protected $_rowClass = 'Application_Resource_Edifici_Item';

    public function init()
    {
    }

    public function insertPosition($info)
    {

    }

    public function getpositionsbyEd($info)
    {
        $select = $this->select('posizione')->where('edificio =?', (int)$info);
        $res = $this->fetchAll($select);
        return $res;
    }
}