<?php 
class Application_Form_Utente_Posizione_Inserisci extends Zend_Form
{
	protected $_userModel;
	
	public function init()
	{
		$this->_userModel=new Application_Model_User();
		$this->setMethod('post');
		$this->setName('aggiungipos');
		$this->setAction('');
		$this->setAttrib('enctype', 'multipart/form-data');

		$edificio = array();
		$edif = $this->_userModel->visualizzaEdifici();
		foreach ($edif as $edi) {
			$edificio[$edi -> id] = $edi->nome;
		}
		$this->addElement('select', 'edificio', array(
			'label' => 'Edificio',
			'required' => true,
			'multiOptions' => $edificio,
		));



		
		$this->addElement('text', 'tipo', array(
            'label' => 'Tipo',
            'filters' => array('StringTrim'),
            'required' => true,
            'validators' => array(array('StringLength',true, array(1,25))),
		));
		
		$this->addElement('text', 'posizione', array(
            'label' => 'Posizione',
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