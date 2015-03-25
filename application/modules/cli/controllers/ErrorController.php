<?php

/**
 * @author Benny Van der Stee
 *
 * Class ErrorController
 */
class ErrorController extends ZFCli_Controller_Action
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
                $this->output->message($error->getMessage() ."\n", ZFCli_Output::ERROR);
            }
        }
    }
}
