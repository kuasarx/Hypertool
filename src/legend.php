<?php

namespace Hypertool\Html;

class Legend extends HtmlElement {
    public function __construct($text) {
        parent::__construct('legend'); // Call the parent constructor with the tag name 'legend'
        $this->text($text); // Set the text content of the <legend> element
    }
}

// Usage example
// $legend = new Legend('Form Legend');
// echo $legend->output();

/*
Usage example:

// Using the class directly
$legend = new Legend('Sample content');
echo $legend->output();

// Using the static factory method
$legend2 = HtmlElement::legend('Sample content');
echo $legend2->output();
*/