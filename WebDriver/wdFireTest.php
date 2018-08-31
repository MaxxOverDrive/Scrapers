<?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
// you'll need to modify this path so it points to the composer autoloader
    //require_once __DIR__ . '/vendor/autoload.php';
    require_once "phpwebdriver/WebDriver.php";

    /**
     * since I'm running the selenium jar locally, this is all I need.
     * I just run it in the background and my php scripts connect to it and
     * the tests
     */
     
    $host = 'http://localhost:4444/wd/hub';

    $driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());

    $driver->get('http://google.com');
    $element = $driver->findElement(WebDriverBy::name('q'));
    $element->sendKeys('Cheese');
    $element->submit();




/*
$webdriver = new WebDriver("/localhost", "4444");
$webdriver->connect("firefox");
$webdriver->get("http://google.com");
$element = $webdriver->findElementBy(LocatorStrategy::name, "q");
if ($element) {
    $element->sendKeys(array("php webdriver" ) );
    $element->submit();
}

$webdriver->close();
*/

?>
