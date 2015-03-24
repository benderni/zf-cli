<?php

/**
 * @author James McFadden (http://jamesmcfadden.co.uk/)
 * @author Benny Van der Stee
 *
 * Class ZFCli_Controller_Action
 */
class ZFCli_Controller_Action extends Zend_Controller_Action
{
    /**
     * @var ZFCli_Output
     */
    protected $output;

    /**
     * Disable view renderer for CLI
     */
    public function init()
    {
        parent::init();
        $this->_helper->viewRenderer->setNoRender(TRUE);
        $this->output = new ZFCli_Output();
    }
}