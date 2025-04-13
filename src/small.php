<?php

namespace Hypertool\Html;

class Small extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('small');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$small = new Small('Sample content');
echo $small->output();

// Using the static factory method
$small2 = HtmlElement::small('Sample content');
echo $small2->output();
*/