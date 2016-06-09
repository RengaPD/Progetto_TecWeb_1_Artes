<?php

class UserController extends Zend_Controller_Action
{
    protected $_userModel;
    protected $_form;
    protected $_authService;


    public function init()
    {
        $this->_helper->layout->setLayout('layoutuser');
        $this->_userModel = new Application_Model_User();
        $this->_authService = new Application_Service_Auth();

    }

    public function indexAction()
    {

    }
    public function logoutAction()
    {
        $this->_authService->clear();
        return $this->_helper->redirector('index','public');
    }
    public function modificaprofiloAction()
    {
        $a=$this->_authService->getIdentity()->Id;
        $form = new Application_Form_Utente_Modifica();
        $gigi=$this->_userModel->visualizzaUtentedaID($a)->toArray();
        $form->populate($gigi[0]);
        if($this->getRequest()->isPost())
        {
            if($form->isValid($_POST))
            {
                $dati= $form->getValues();
                echo 'Dati inseriti con successo';
                $this->_userModel->modificaProfilo($dati,$a);
            }
            else
            {
                echo 'Inserimento fallito';
            }
        }
        $this->view->assign('form', $form);
    }
    
    public function segnalaposAction()
    {
        $form = new Application_Form_User_Posizione_Inserisci();
        if($this->getRequest()->isPost())
        {
            if($form->isValid($_POST))
            {
                $dati= $form->getValues();
                echo 'Dati inseriti con successo';
                $this->_userModel->inserisciPos($dati);
            }
            else
            {
                'Inserimento fallito';
            }
        }
        $this->view->assign('form', $form);
    }


    

    public function inseriscieventiAction()
    {
        $form = new Application_Form_User_Evento_Aggiungi();
        if($this->getRequest()->isPost())
        {
            if($form->isValid($_POST))
            {
                $dati= $form->getValues();
                echo 'Dati inseriti con successo';
                $this->_userModel->inserisciEvento($dati);
            }
            else
            {
                'Inserimento fallito';
            }
        }
        $this->view->assign('form', $form);
    }


    public function viewstaticAction () {
        $page = $this->_getParam('staticPage'); //assegna a pagina il parametro 'static page'
        $this->render($page); //carica pagina associata a page
    }

}
?>
