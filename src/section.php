<?php

namespace Hypertool\Html;

class Section extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('section');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$section = new Section('Sample content');
echo $section->output();

// Using the static factory method
$section2 = HtmlElement::section('Sample content');
echo $section2->output();
*/