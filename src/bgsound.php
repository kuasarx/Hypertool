<?php

namespace Hypertool\Html;

class Bgsound extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('bgsound');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$bgsound = new Bgsound('Sample content');
echo $bgsound->output();

// Using the static factory method
$bgsound2 = HtmlElement::bgsound('Sample content');
echo $bgsound2->output();
*/