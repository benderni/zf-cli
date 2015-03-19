<?php

/**
 * @author      Benny Van der Stee (bennyvanderstee@gmail.com)
 * @copyright   2015 Benny Van der Stee
 * @license     https://github.com/bvanderstee/zf-cli/blob/master/LICENSE
 *
 * Class App_Controller_Router_Cli
 */
class App_Controller_Router_Cli extends Zend_Controller_Router_Abstract
{
    /**
     * @param Zend_Controller_Request_Abstract $request
     * @return bool|void|Zend_Controller_Request_Abstract
     */
    public function route(Zend_Controller_Request_Abstract $request)
    {
        $getopt = new Zend_Console_Getopt(array());
        $arguments = $getopt->getRemainingArgs();

        if ($arguments) {
            $controller = array_shift($arguments);
            $action = array_shift($arguments);

            if (!preg_match ('~\W~', $controller)) {
                $request->setControllerName($controller);
                $request->setActionName($action);
                unset($_SERVER['argv'][1]);

                // Any left over arguments are set as request parameters
                $request->setParams($arguments);

                return $request;
            }
            print "Invalid command given.\n"; exit;
        }
        print "No command given. Expecting a controller name followed by an action name. Example: \n
            [php script.php cli index]\n"; exit;
    }

    /**
     * @param array $userParameters
     * @param null $name
     * @param bool $reset
     * @param bool $encode
     * @return string|void
     */
    public function assemble ($userParameters, $name = null, $reset = false, $encode = true) {
        die("Oops! " . __METHOD__ . " might need implementing");
    }
}