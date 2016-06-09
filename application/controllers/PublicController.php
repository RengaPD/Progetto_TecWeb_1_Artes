<?php

class PublicController extends Zend_Controller_Action
{
	protected $_publicModel;
    protected $_auth;
    
    public function init()
    {
		$this->_helper->layout->setLayout('layout');
		$this->_logger = Zend_Registry::get('log');
        $this->_publicModel=new Application_Model_Public();
        $this->_auth=new Application_Service_Auth();
    }

    public function indexAction()
    {    	    	
    	$view = new Zend_View();
		$view->setScriptPath('/opt/lampp/htdocs/zf-prova/application/views/scripts/public');
		return $view->render('index.phtml');
    }
    
    public function registratiAction()
    {
        $form=new Application_Form_Public_Registra();
        if($this->getRequest()->isPost())
        {
            if($form->isValid($_POST))
            {
                $dati= $form->getValues();
                echo 'Registrazione avvenuta!';
                $this->_publicModel->registrati($dati);
            }
            else
            {
                echo 'Qualcosa è andato storto';
            }
        }
        $this->view->assign('form', $form);
    }
    public function loginAction()
    {
        $form=new Application_Form_Public_Auth_Login();
        if($form->isValid($_POST))
        {
            $credenziali=$form->getValues();
            $this->_auth->autenticazione($credenziali);
            $this->redirect('index');
        }
        $this->view->assign('form',$form);
    }
    public function viewstaticAction () {
        $page = $this->_getParam('staticPage');
        $this->render($page);
    }
    public function accessonegatoAction()
    {}
}
