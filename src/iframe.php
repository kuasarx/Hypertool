<?php

namespace Hypertool\Html;

class Iframe extends HtmlElement {
    public function __construct() {
        parent::__construct('iframe'); // Set the tag name to 'iframe'
    }
    // Add more methods for other attributes as needed for the <iframe> element
}

// Usage example
// $iframe = new Iframe();
// $iframe->setSrc('https://www.example.com')
//       ->setWidth('800px')
//       ->setHeight('600px')
//       ->setClass('iframe-class');
// 
// echo $iframe->output();

/*
Usage example:

// Using the class directly
$iframe = new Iframe('Sample content');
echo $iframe->output();

// Using the static factory method
$iframe2 = HtmlElement::iframe('Sample content');
echo $iframe2->output();
*/