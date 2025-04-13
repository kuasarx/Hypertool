<?php

namespace Hypertool\Html;

class Keygen extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('keygen');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$keygen = new Keygen('Sample content');
echo $keygen->output();

// Using the static factory method
$keygen2 = HtmlElement::keygen('Sample content');
echo $keygen2->output();
*/