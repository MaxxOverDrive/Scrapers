<?php
// tests/acceptance/UserSubscriptionTestFB.php

public function fillFormAndSubmit($inputs)
{
    $this->webDriver->get('http://vaprobash.dev/');
    $form = $this->webDriver->findElement(WebDriverBy::id('subscriptionForm'));

    foreach ($inputs as $input => $value) {
        $form->findElement(WebDriverBy::name($input))->sendKeys($value);
    }

    $form->submit();
}





//TEST 2
public function testElementsExistsOnCart()
{
    $this->webDriver->get('http://vaprobash.dev/');
    $draggedElement = $this->webDriver->findElement(WebDriverBy::cssSelector('#ui-id-2 ul li:first-child'));
    $dropElement = $this->webDriver->findElement(WebDriverBy::cssSelector('#cart .ui-widget-content'));

    $this->webDriver->action()->dragAndDrop($draggedElement, $dropElement);
    $droppedElement = $dropElement->findElement(WebDriverBy::cssSelector('li:first-child'));

    $this->assertEquals($draggedElement->getText(), $droppedElement->getText());
}





//SEND KEYS METHOD
$this->webDriver->getKeyboard()->sendKeys([WebDriverKeys::COMMAND, 'S']);
?>
