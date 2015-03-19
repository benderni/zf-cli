<?php

/**
 * @author James McFadden (http://jamesmcfadden.co.uk/)
 * @author Benny Van der Stee (bennyvanderstee@gmail.com)
 *
 * Class Bootstrap
 */
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
   // Insert this function in your own Boostrap.php 
   protected function _initCli()
    {
        if(PHP_SAPI == 'cli') {

            $this->bootstrap('FrontController');
            $front = $this->getResource('FrontController');
            $front->setRouter(new App_Controller_Router_Cli());
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
