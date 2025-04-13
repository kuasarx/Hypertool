<?php

namespace Hypertool\Html;

class Basefont extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('basefont');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$basefont = new Basefont('Sample content');
echo $basefont->output();

// Using the static factory method
$basefont2 = HtmlElement::basefont('Sample content');
echo $basefont2->output();
*/