<?php

namespace Hypertool\Html;

class Li extends HtmlElement {
    public function __construct() {
        parent::__construct('li'); // Call the parent class constructor with 'li' as the tag name
    }
}

// Usage example
// $li = new Li();
// $li->setText('List Item')->setClass('list-item');
// 
// echo $li->output(); // Output: <li class="list-item">List Item</li>

/*
Usage example:

// Using the class directly
$li = new Li('Sample content');
echo $li->output();

// Using the static factory method
$li2 = HtmlElement::li('Sample content');
echo $li2->output();
*/