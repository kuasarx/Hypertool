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