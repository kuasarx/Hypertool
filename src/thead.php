<?php

namespace Hypertool\Html;

class Thead extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('thead');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$thead = new Thead('Sample content');
echo $thead->output();

// Using the static factory method
$thead2 = HtmlElement::thead('Sample content');
echo $thead2->output();
*/