<?php

class PublicController extends Zend_Controller_Action
{

	
    public function init()
    {
		$this->_helper->layout->setLayout('layout');
		$this->_logger = Zend_Registry::get('log');  	
    }

    public function indexAction()
    {    	    	
    	$view = new Zend_View();
		$view->setScriptPath('/opt/lampp/htdocs/zf-prova/application/views/scripts/public');
		return $view->render('index.phtml');
    }

    public function viewstaticAction () {
        $view = new Zend_View();
        $view->setScriptPath('/opt/lampp/htdocs/zf-prova/application/views/scripts/public');
    	$page = $this->_getParam('staticPage'); //assegna a pagina il parametro 'static page'

    	$this->render($page); //carica pagina associata a page
    }
}
