<?php

namespace Hypertool\Html;

class Frameset extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('frameset');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$frameset = new Frameset('Sample content');
echo $frameset->output();

// Using the static factory method
$frameset2 = HtmlElement::frameset('Sample content');
echo $frameset2->output();
*/