<?php

class StaffController extends Zend_Controller_Action
{
    protected $_staffModel;
    protected $_form;


    public function init()
    {
        $this->_helper->layout->setLayout('layoutstaff');
        $this->_staffModel = new Application_Model_Staff();
    }

    public function indexAction()
    {

    }

    public function assegnaplanAction()
    {
        
    }

    public function segnalaAction()
    {

        $result = $this->_adminModel->visualizzaUtenti();


    }


    public function viewstaticAction () {
        $page = $this->_getParam('staticPage'); //assegna a pagina il parametro 'static page'
        $this->render($page); //carica pagina associata a page
    }

}
?>
