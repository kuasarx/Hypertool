<?php

namespace Hypertool\Html;

class Noembed extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('noembed');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$noembed = new Noembed('Sample content');
echo $noembed->output();

// Using the static factory method
$noembed2 = HtmlElement::noembed('Sample content');
echo $noembed2->output();
*/