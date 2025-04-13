<?php

namespace Hypertool\Html;

class Rtc extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('rtc');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$rtc = new Rtc('Sample content');
echo $rtc->output();

// Using the static factory method
$rtc2 = HtmlElement::rtc('Sample content');
echo $rtc2->output();
*/