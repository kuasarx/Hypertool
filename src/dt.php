<?php

namespace Hypertool\Html;

class Dt extends HtmlElement {
    public function __construct($term) {
        parent::__construct('dt');
        $this->text($term); // Set the content of the <dt> element
    }
}

// Usage example
// $dt = new Dt('Definition Term');
//
// echo $dt->output();

/*
Usage example:

// Using the class directly
$dt = new Dt('Sample content');
echo $dt->output();

// Using the static factory method
$dt2 = HtmlElement::dt('Sample content');
echo $dt2->output();
*/