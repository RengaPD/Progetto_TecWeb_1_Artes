<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

protected function _initLogging()
    {
        $logger = new Zend_Log();
        $writer = new Zend_Log_Writer_Firebug();
        $logger->addWriter($writer);

        Zend_Registry::set('log', $logger);

        $this->_logger = $logger;
    		$this->_logger->info('Bootstrap ' . __METHOD__);
    }


}

