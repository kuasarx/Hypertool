<?php

namespace Hypertool\Html;

class Sub extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('sub');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$sub = new Sub('Sample content');
echo $sub->output();

// Using the static factory method
$sub2 = HtmlElement::sub('Sample content');
echo $sub2->output();
*/