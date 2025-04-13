<?php

namespace Hypertool\Html;

class Html extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('html');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$html = new Html('Sample content');
echo $html->output();

// Using the static factory method
$html2 = HtmlElement::html('Sample content');
echo $html2->output();
*/