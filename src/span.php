<?php

namespace Hypertool\Html;

class Span extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('span');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$span = new Span('Sample content');
echo $span->output();

// Using the static factory method
$span2 = HtmlElement::span('Sample content');
echo $span2->output();
*/