<?php
class Aside extends HtmlElement {
    public function __construct() {
        parent::__construct('aside'); // Call the parent constructor with 'aside' as the tag name
    }
}

/** Usage example
$aside = new Aside();
$aside->setId('asideID')->setClass('asideClass')->text('This is an aside element.');

echo $aside->output();
*/
/*
Usage example:

// Using the class directly
$aside = new Aside('Sample content');
echo $aside->output();

// Using the static factory method
$aside2 = HtmlElement::aside('Sample content');
echo $aside2->output();
*/