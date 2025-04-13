<?php

namespace Hypertool\Html;

class Td extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('td');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$td = new Td('Sample content');
echo $td->output();

// Using the static factory method
$td2 = HtmlElement::td('Sample content');
echo $td2->output();
*/