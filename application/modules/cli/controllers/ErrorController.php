<?php

/**
 * @author Benny Van der Stee
 *
 * Class ErrorController
 */
class ErrorController extends App_Controller_Action
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
