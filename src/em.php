<?php

namespace Hypertool\Html;

class Em extends HtmlElement {
    public function __construct() {
        parent::__construct('em');
    }
}

// Usage example
// $em = new Em();
// $em->setText('This is emphasized text.');
// 
// echo $em->output();

/*
Usage example:

// Using the class directly
$em = new Em('Sample content');
echo $em->output();

// Using the static factory method
$em2 = HtmlElement::em('Sample content');
echo $em2->output();
*/