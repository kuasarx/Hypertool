<?php

namespace Hypertool\Html;

class U extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('u');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$u = new U('Sample content');
echo $u->output();

// Using the static factory method
$u2 = HtmlElement::u('Sample content');
echo $u2->output();
*/