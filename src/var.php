<?php

namespace Hypertool\Html;

class Var extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('var');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$var = new Var('Sample content');
echo $var->output();

// Using the static factory method
$var2 = HtmlElement::var('Sample content');
echo $var2->output();
*/