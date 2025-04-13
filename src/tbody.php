<?php

namespace Hypertool\Html;

class Tbody extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('tbody');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$tbody = new Tbody('Sample content');
echo $tbody->output();

// Using the static factory method
$tbody2 = HtmlElement::tbody('Sample content');
echo $tbody2->output();
*/