<?php

namespace Hypertool\Html;

class Rt extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('rt');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$rt = new Rt('Sample content');
echo $rt->output();

// Using the static factory method
$rt2 = HtmlElement::rt('Sample content');
echo $rt2->output();
*/