<?php

namespace Hypertool\Html;

class H extends HtmlElement {
    public function __construct($level) {
        parent::__construct("h$level");
    }
}

// Usage example
// $heading = new H(1); // Create an <h1> element
// $heading->setText("Hello, World!"); // Set the text content of the heading
// 
// echo $heading->output();

/*
Usage example:

// Using the class directly
$h = new H('Sample content');
echo $h->output();

// Using the static factory method
$h2 = HtmlElement::h('Sample content');
echo $h2->output();
*/