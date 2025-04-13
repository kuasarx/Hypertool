<?php
class I extends HtmlElement {
    public function __construct() {
        parent::__construct('hr');
    }
}

// Usage example
// $hr = new I();
// echo $hr->output(); // Outputs: "<i></i>"
/*
Usage example:

// Using the class directly
$i = new I('Sample content');
echo $i->output();

// Using the static factory method
$i2 = HtmlElement::i('Sample content');
echo $i2->output();
*/