<?php
class Noscript extends HtmlElement {
    public function __construct() {
        parent::__construct('noscript');
    }

    // You can add any additional methods specific to the <noscript> element here
}

// Usage example
// $noscript = new Noscript();
// $noscript->setText("This page requires JavaScript to be enabled."); // Set the content of the <noscript> element
// 
// echo $noscript->output();

/*
Usage example:

// Using the class directly
$noscript = new Noscript('Sample content');
echo $noscript->output();

// Using the static factory method
$noscript2 = HtmlElement::noscript('Sample content');
echo $noscript2->output();
*/