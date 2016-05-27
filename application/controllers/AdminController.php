<?php

class AdminController extends Zend_Controller_Action
{
	protected $_adminModel;
	protected $_form;
    public $param;


	public function init()
	{
		$this->_helper->layout->setLayout('layoutadmin');
		$this->_adminModel = new Application_Model_Admin();
	}

	public function indexAction()
	{
		
	}

	public function aggiungiutenteAction()
	{
		$form = new Application_Form_Amministrazione_Utente_Aggiungi();
		if($this->getRequest()->isPost())
		{
				if($form->isValid($_POST))
				{
					$dati= $form->getValues();
					echo 'Dati inseriti con successo';
					$this->_adminModel->inserisciUtente($dati);
				}
				else 
				{
					'Inserimento fallito';
				}
		}
        $this->view->assign('form', $form);
    }
	
	 public function selezionaAction()
	{

        $result = $this->_adminModel->visualizzaUtente()->toArray();
        $this->view->assign('risultato', $result);
        $bottone=new Zend_Form_Element_Submit('seleziona');
        $bottone->setLabel('Modifica');
        $this->view->assign('bottonemod',$bottone);
        

	}
    public function modificautenteAction()
    {

        $a=$this->_getParam('id');
        var_dump($a); die();
        $result= $this->_adminModel->modificaUtente($a);
    }

public function viewstaticAction () {
    	$page = $this->_getParam('staticPage'); //assegna a pagina il parametro 'static page'
    	$this->render($page); //carica pagina associata a page
    }
	
}
?>
