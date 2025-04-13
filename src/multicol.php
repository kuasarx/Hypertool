<?php

namespace Hypertool\Html;

class Multicol extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('multicol');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$multicol = new Multicol('Sample content');
echo $multicol->output();

// Using the static factory method
$multicol2 = HtmlElement::multicol('Sample content');
echo $multicol2->output();
*/