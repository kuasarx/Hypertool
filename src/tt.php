<?php

namespace Hypertool\Html;

class Tt extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('tt');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$tt = new Tt('Sample content');
echo $tt->output();

// Using the static factory method
$tt2 = HtmlElement::tt('Sample content');
echo $tt2->output();
*/