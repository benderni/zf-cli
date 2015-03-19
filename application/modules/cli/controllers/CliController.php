<?php

/**
 * @author      Benny Van der Stee (bennyvanderstee@gmail.com)
 * @copyright   2015 Benny Van der Stee
 * @license     https://github.com/bvanderstee/zf-cli/blob/master/LICENSE
 *
 * Class CliController
 */
class CliController extends App_Controller_Action
{
    /**
     * Cli index action
     */
    public function indexAction()
    {
        print $this->output->success("success \n");
    }
}
