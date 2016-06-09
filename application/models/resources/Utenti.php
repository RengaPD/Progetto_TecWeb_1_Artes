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
    public function editUtenti(array $info,$id)
    {

        $where = $this->getAdapter()->quoteInto('id = ?', $id);
        $this->update($info, $where);
    }
    public function showUtenti()
    {
        $select=$this->select()->order('Nome');
        $res=$this->fetchAll($select);
        return $res;
        
    }
    public function showUtentedaID($info)
    {
        $select=$this->select()
            ->where('id =?', (int)$info);
        $res=$this->fetchAll($select);
        return $res;
    }
    public function deleteUtentedaID($info)
    {
        $where = $this->getAdapter()->quoteInto('id = ?', $info);
        $this->delete($where);
    }
    public function findUserEmail($info)
    {
        $select=$this->select()->where('email=?',$info);
        $res=$this->fetchRow($select);
        return $res;
    }
    public function clearPosition($id)
    {
        $where = $this->getAdapter()->quoteInto('Id = ?', $id);
        $this->update(array('posizione'=>'0'),$where);
    }
}

