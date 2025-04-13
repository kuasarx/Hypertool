<?php
class Figcaption extends HtmlElement {
    public function __construct() {
        parent::__construct('figcaption');
    }
}

// Usage example
// $figcaption = new Figcaption();
// $figcaption->setCaption('Image Caption');
// 
// echo $figcaption->output();
/*
Usage example:

// Using the class directly
$figcaption = new Figcaption('Sample content');
echo $figcaption->output();

// Using the static factory method
$figcaption2 = HtmlElement::figcaption('Sample content');
echo $figcaption2->output();
*/