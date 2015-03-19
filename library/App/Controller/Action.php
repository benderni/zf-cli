<?php

/**
 * @author James McFadden (http://jamesmcfadden.co.uk/)
 * @author Benny Van der Stee (bennyvanderstee@gmail.com)
 *
 * Class App_Controller_Action
 */
class App_Controller_Action extends Zend_Controller_Action
{
    /**
     * @var App_Cli_Output
     */
    protected $output;

    /**
     * Disable view renderer for CLI
     */
    public function init()
    {
        parent::init();
        $this->_helper->viewRenderer->setNoRender(TRUE);
        $this->output = new App_Cli_Output();
    }
}