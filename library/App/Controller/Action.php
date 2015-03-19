<?php

/**
 * @author      Benny Van der Stee (bennyvanderstee@gmail.com)
 * @copyright   2015 Benny Van der Stee
 * @license     https://github.com/bvanderstee/zf-cli/blob/master/LICENSE
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