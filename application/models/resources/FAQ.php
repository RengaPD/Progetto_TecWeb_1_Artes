<?php

class Application_Resource_FAQ extends Zend_Db_Table_Abstract
{
    protected $_name    = 'faq';
    protected $_primary  = 'Id';
    protected $_rowClass = 'Application_Resource_FAQ_Item';

    public function init()
    {
    }

    public function insertfaq($info)
    {
        $this->insert($info);
    }
    public function showfaq()
    {
        $select=$this->select()->order('Id');
        $res=$this->fetchAll($select);
        return $res;
    }

}