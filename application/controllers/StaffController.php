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

        $posizione = $this->_getParam('posizione');
        $result = $this->_staffModel->visualizzaPlanbypos()->toArray();
        $this->view->assign('risultato', $result);
        $bottone=new Zend_Form_Element_Submit('seleziona');
        $bottone->setLabel('Assegna');
        $this->view->assign('bottoneass',$bottone);
        
    }


    public function updateajaxAction()
    {
        $this->_helper->getHelper('layout')->disableLayout();
        $this->_helper->viewRenderer->setNoRender();
        $edificio = $this->_staffModel->edificiodaID($_POST['edificio'])->toArray();
        $edificino = $edificio[0];

        $posizioni = $this->_staffModel->posizioniDaEdificio($edificino['nome']);

        foreach ($posizioni as $posi) {
            $posix[$posi->id] = $posi->posizione;
        }

        $response = $this->_helper->json($posix);
        if ($response != null) {
            $this->getResponse()->setHeader('Content-type', 'application/json')->setBody($response);
        }
    }

    public function visualizzaeventiAction()
    {
        $result = $this->_staffModel->visualizzaEventi()->toArray();
        $this->view->assign('risultato', $result);
        $bottoneass=new Zend_Form_Element_Submit('assegna');
        $bottoneass->setLabel('Assegna Plan');
        $bottonedel=new Zend_Form_Element_Submit('cancella');
        $bottonedel->setLabel('Elimina');
        $this->view->assign('bottoneass',$bottoneass);
        $this->view->assign('bottonedel',$bottonedel);

    }
    public function inseriscieventiAction()
    {
        $form = new Application_Form_Staff_Evento_Aggiungi();
        if($this->getRequest()->isPost())
        {
            if($form->isValid($_POST))
            {
                $dati= $form->getValues();
                echo 'Dati inseriti con successo';
                $this->_staffModel->inserisciEvento($dati);
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
