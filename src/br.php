<?php

namespace Hypertool\Html;

class Br extends HtmlElement {
    public function __construct() {
        parent::__construct('br'); // Call the parent constructor with 'br' tag
    }
}

// Usage example
// $br = new Br();
// echo $br->output();

/*
Usage example:

// Using the class directly
$br = new Br('Sample content');
echo $br->output();

// Using the static factory method
$br2 = HtmlElement::br('Sample content');
echo $br2->output();
*/