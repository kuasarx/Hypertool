<?php

namespace Hypertool\Html;

class Input extends HtmlElement {
    public function __construct() {
        parent::__construct('input');
    }
    // Add more methods for other attributes specific to <input> elements
}

// Usage example
// $input = new Input();
// $input->setType('text')->setName('username')->setPlaceholder('Enter your username');
// 
// echo $input->output(); // Output the generated <input> element

/*
Usage example:

// Using the class directly
$input = new Input('Sample content');
echo $input->output();

// Using the static factory method
$input2 = HtmlElement::input('Sample content');
echo $input2->output();
*/