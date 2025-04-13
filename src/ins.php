<?php

namespace Hypertool\Html;

class Ins extends HtmlElement {
    public function __construct() {
        parent::__construct('ins'); // Call the parent constructor with the tag name 'ins'
    }

    // Add more methods specific to <ins> if needed
}

// Usage example
// $ins = new Ins();
// $ins->setCite('https://example.com')->setDatetime('2023-08-18')->text('Inserted content');
// 
// echo $ins->output();

/*
Usage example:

// Using the class directly
$ins = new Ins('Sample content');
echo $ins->output();

// Using the static factory method
$ins2 = HtmlElement::ins('Sample content');
echo $ins2->output();
*/