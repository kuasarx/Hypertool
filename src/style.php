<?php

namespace Hypertool\Html;

class Style extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('style');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$style = new Style('Sample content');
echo $style->output();

// Using the static factory method
$style2 = HtmlElement::style('Sample content');
echo $style2->output();
*/