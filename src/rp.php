<?php

namespace Hypertool\Html;

class Rp extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('rp');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$rp = new Rp('Sample content');
echo $rp->output();

// Using the static factory method
$rp2 = HtmlElement::rp('Sample content');
echo $rp2->output();
*/