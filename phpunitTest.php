<?php
#require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class SeleneseTests extends PHPUnit_Extensions_SeleniumTestCase
{
	//public static $seleneseDirectory = "Tests";

	protected function setup()
	{
		global $environment; // variable taken from the boostrap file

		$this->setHost('192.168.1.64');
        $this->setPort(4444);
		$this->setBrowser('firefox');
		$this->setBrowserUrl($environment);
	}

	public function testNumber1()
	{
		$this->windowMaximize();
		$this->runSelenese('Tests/test1.html');
	}

	public function testNumber2()
	{
		$this->windowMaximize();
		$this->runSelenese('Tests/test2.html');
	}
}

?>

