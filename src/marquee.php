<?php

namespace Hypertool\Html;

class Marquee extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('marquee');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$marquee = new Marquee('Sample content');
echo $marquee->output();

// Using the static factory method
$marquee2 = HtmlElement::marquee('Sample content');
echo $marquee2->output();
*/