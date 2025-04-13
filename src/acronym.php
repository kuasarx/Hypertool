<?php

namespace Hypertool\Html;

class Acronym extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('acronym');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$acronym = new Acronym('Sample content');
echo $acronym->output();

// Using the static factory method
$acronym2 = HtmlElement::acronym('Sample content');
echo $acronym2->output();
*/