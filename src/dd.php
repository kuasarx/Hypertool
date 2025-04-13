<?php

namespace Hypertool\Html;

class Dd extends HtmlElement {
    public function __construct() {
        parent::__construct('dd'); // Set the tag name to 'dd'
    }
}

// Usage example
// $dd = new Dd();
// $dd->setText('Description of the term');
// 
// echo $dd->output();

/*
Usage example:

// Using the class directly
$dd = new Dd('Sample content');
echo $dd->output();

// Using the static factory method
$dd2 = HtmlElement::dd('Sample content');
echo $dd2->output();
*/