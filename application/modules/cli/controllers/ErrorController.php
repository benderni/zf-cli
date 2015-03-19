<?php

/**
 * @author      Benny Van der Stee (bennyvanderstee@gmail.com)
 * @copyright   2015 Benny Van der Stee
 * @license     https://github.com/bvanderstee/zf-cli/blob/master/LICENSE
 *
 * Class ErrorController
 */
class ErrorControllerAction extends App_Controller_Action
{
    /**
     * Prints error messages
     */
    public function errorAction()
    {
        foreach ($this->_getParam ('error_handler') as $error)
        {
            if ($error instanceof Exception)
            {
                print $this->output->error($error->getMessage()) . "\n";
            }
        }
    }
}
