<?php

class Application_Resource_Posizioni extends Zend_Db_Table_Abstract
{
    protected $_name = 'posizioni';
    protected $_primary = 'id';
    protected $_rowClass = 'Application_Resource_Posizioni_Item';

    public function init()
    {
    }

    public function insertPosition($info)
    {

    }

    public function getpositionsbyEd($info)
    {
        $select = $this->select('posizione')->where('edificio =?', $info);
        $res = $this->fetchAll($select);
        return $res;
    }
}