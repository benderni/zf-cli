<?php

/**
 * @author James McFadden (http://jamesmcfadden.co.uk/)
 * @author Benny Van der Stee
 *
 * Class Bootstrap
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
   protected function _initCli()
    {
        if(PHP_SAPI == 'cli') {

            $this->bootstrap('FrontController');
            $front = $this->getResource('FrontController');
            $front->setRouter(new ZFCli_Controller_Router_Cli());
            $front->setRequest(new Zend_Controller_Request_Simple());
            $front->setDefaultModule('cli');

            $error = new Zend_Controller_Plugin_ErrorHandler(array(
                'module' => 'cli',
                'controller' => 'error',
                'action' => 'error'
            ));
        }
    }
}
