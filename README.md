# zf-cli
A Zend Framework library and skeleton module for creating cli modules.

### Installation

#### Manual
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

Add this `autoloaderNamespaces[] = "ZFCli_"` to your application.ini file.

#### Composer
Add following to your composer.json file

````
{
	"repositories": [
        {
            "type": "git",
            "url": "https://github.com/bvanderstee/zf-cli"
        }
    ],
    "require-dev": {
        "bvanderstee/zf-cli": "dev-master"
    }
}
````
You can check the `../vendor/bvanderstee/zf-cli/application` folder for a skeleton cli module.

You can check the `../vendor/bvanderstee/zf-cli/bin/script.php` for a skeleton script.php file

### Usage
````
php bin/script.php controller action
````

#### Example
````
php bin/script.php cli index
````
will output 'success'.
