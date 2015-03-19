# zf-cli
A command-line interface skeleton module for ZF1

### Installation
Check out the repositry or download the zip. Add the `cli` module to your modules folder.

Add following code to your Bootstrap.php file

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

Add this `autoloaderNamespaces.app = "App_"` to your application.ini file.

### Usage
````
php bin/script.php controller action
````

#### Example
````
php bin/script.php cli index
````
will output 'success'.
