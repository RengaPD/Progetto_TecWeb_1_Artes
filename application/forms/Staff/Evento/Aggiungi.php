<?php 
class Application_Form_Staff_Evento_Aggiungi extends Zend_Form
{
	protected $_staffModel;
	
	public function init()
	{
		$this->_staffModel=new Application_Model_Staff();
		$this->setMethod('post');
		$this->setName('aggiungievento');
		$this->setAction('');
		$this->setAttrib('enctype', 'multipart/form-data');

		$edificio = array();
		$edif = $this->_staffModel->visualizzaEdifici();
		foreach ($edif as $edi) {
			$edificio[$edi -> id] = $edi->nome;
		}
		$this->addElement('select', 'edificio', array(
			'id' => 'Edificio',
			'label' => 'Edificio',
			'required' => true,
			'multiOptions' => $edificio,
		));

		$this->addElement('select', 'posizione', array(

			'label' => 'Posizione',
			'filters' => array('StringTrim'),
			'required' => true,
			'validators' => array(array('StringLength',true, array(1,25))),
		));
		
		$this->addElement('text', 'tipo', array(
            'label' => 'Tipo',
            'filters' => array('StringTrim'),
            'required' => true,
            'validators' => array(array('StringLength',true, array(1,25))),
		));
		
		
		$this->addElement('text', 'descrizione', array(
            'label' => 'Descrizione',
            'filters' => array('StringTrim'),
            'required' => false,
			'description' => 'Eventualmente lasciare vuoto',

			'validators' => array(array('StringLength',true, array(1,25))),
		));
		$this->addElement('submit', 'add', array(
            'label' => 'Aggiungi Prodotto',
		));

	}
	
}
?>