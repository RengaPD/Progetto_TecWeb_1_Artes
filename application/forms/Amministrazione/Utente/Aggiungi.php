<?php 
class Application_Form_Amministrazione_Utente_Aggiungi extends Zend_Form
{
	protected $_adminModel;
	
	public function init()
	{
		$this->_adminModel=new Application_Model_Admin();
		$this->setMethod('post');
		$this->setName('aggiungiutente');
		$this->setAction('');
		$this->setAttrib('enctype', 'multipart/form-data');

		$this->addElement('text', 'Nome', array(
            'label' => 'Nome',
            'filters' => array('StringTrim'),
            'required' => true,
            'validators' => array(array('StringLength',true, array(1,25))),
		));
		$this->addElement('text', 'Cognome', array(
            'label' => 'Cognome',
            'filters' => array('StringTrim'),
            'required' => true,
            'validators' => array(array('StringLength',true, array(1,25))),
		));
		$this->addElement('text', 'edificio', array(
            'label' => 'Edificio',
            'filters' => array('StringTrim'),
            'required' => false,
        		'description' => 'Eventualmente lasciare vuoto',
            'validators' => array(array('StringLength',true, array(1,25))),
		));
		
		$this->addElement('text', 'email', array(
            'label' => 'email',
            'filters' => array('StringTrim'),
            'required' => true,
            'validators' => array(array('StringLength',true, array(1,25))),
		));
		
		$this->addElement('text', 'posizione', array(
            'label' => 'Posizione',
            'filters' => array('StringTrim'),
            'required' => false,
        		'description' => 'Eventualmente lasciare vuoto',
            'validators' => array(array('StringLength',true, array(1,25))),
		));
		$this->addElement('text', 'password', array(
            'label' => 'Password',
            'filters' => array('StringTrim'),
            'required' => true,
            'validators' => array(array('StringLength',true, array(1,25))),
		));
		$this->addElement('submit', 'add', array(
            'label' => 'Aggiungi Prodotto',
		));
	}
}
?>