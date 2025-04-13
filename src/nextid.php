<?php

namespace Hypertool\Html;

class Nextid extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('nextid');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$nextid = new Nextid('Sample content');
echo $nextid->output();

// Using the static factory method
$nextid2 = HtmlElement::nextid('Sample content');
echo $nextid2->output();
*/