<?php

namespace Hypertool\Html;

class Footer extends HtmlElement {
    public function __construct() {
        parent::__construct('footer'); // Call the parent constructor with 'footer' as the tag name
    }

    // You can add specific methods for <footer> attributes or behaviors here
}

// Usage example
// $footer = new Footer();
// $footer->setId('footerID')->setClass('footerClass')->text('This is the footer content.');
// 
// echo $footer->output();

/*
Usage example:

// Using the class directly
$footer = new Footer('Sample content');
echo $footer->output();

// Using the static factory method
$footer2 = HtmlElement::footer('Sample content');
echo $footer2->output();
*/