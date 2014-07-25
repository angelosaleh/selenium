selenium
========

End user experience testing with phpunit and selenium


PRE-REQUISITES For Client environment:

This client will be 192.168.1.64

1. Install Addon "Selenium IDE 2.5.0" in firefox browser.
	http://release.seleniumhq.org/selenium-ide/2.5.0/selenium-ide-2.5.0.xpi

2. Download Selenium Server jar file, which acts as a local server to validate browser actions.
	http://selenium.googlecode.com/files/selenium-server-standalone-2.39.0.jar

start the selenium java process in the client: 

	java -jar /home/user/selenium-server-standalone-2.39.0.jar

PRE-REQUISITES for CI Server(CIS):

CI server refers to environments that are primarily used for Continuous Ingeration processes such as Deployment.
PHPUnit will be installed in this server.

	wget https://phar.phpunit.de/phpunit.phar
	chmod +x phpunit.phar
	mv phpunit.phar /usr/local/bin/phpunit

PHPUnit_Selenium
Selenium RC integration for PHPUnit.

This package is included in the PHAR distribution of PHPUnit.

In the ci server run:

	phpunit --bootstrap bootstrap.php phpunitTest.php

And you will see the test running on your client.
