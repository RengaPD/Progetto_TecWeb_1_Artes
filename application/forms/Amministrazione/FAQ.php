<?php
class Application_Form_Amministrazione_FAQ extends Zend_Form
{
    protected $_adminModel;

    public function init()
    {
        $this->_adminModel = new Application_Model_Admin();
        $this->setMethod('post');
        $this->setName('faq');
        $this->setAction('');
        $this->setAttrib('enctype', 'multipart/form-data');

        $this->addElement('hidden','Id');

        $this->addElement('textarea', 'Domanda', array(
            'label' => 'Domanda',
            'required' => true,
        ));

        $this->addElement('textarea', 'Risposta', array(
            'label' => 'Risposta',
            'required' => true,
        ));


        $this->addElement('submit', 'add', array(
            'label' => 'Invia',
        ));
    }
}