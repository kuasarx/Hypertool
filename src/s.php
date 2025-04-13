<?php

namespace Hypertool\Html;

class S extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('s');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$s = new S('Sample content');
echo $s->output();

// Using the static factory method
$s2 = HtmlElement::s('Sample content');
echo $s2->output();
*/