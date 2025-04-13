<?php

namespace Hypertool\Html;

class P extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('p');
        $this->content = $content;
    }
}

// Usage example
// $paragraph = new P('This is a paragraph.');
// 
// echo $paragraph->output();

/*
Usage example:

// Using the class directly
$p = new P('Sample content');
echo $p->output();

// Using the static factory method
$p2 = HtmlElement::p('Sample content');
echo $p2->output();
*/