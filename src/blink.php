<?php

namespace Hypertool\Html;

class Blink extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('blink');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$blink = new Blink('Sample content');
echo $blink->output();

// Using the static factory method
$blink2 = HtmlElement::blink('Sample content');
echo $blink2->output();
*/