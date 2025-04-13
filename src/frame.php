<?php

namespace Hypertool\Html;

class Frame extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('frame');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$frame = new Frame('Sample content');
echo $frame->output();

// Using the static factory method
$frame2 = HtmlElement::frame('Sample content');
echo $frame2->output();
*/