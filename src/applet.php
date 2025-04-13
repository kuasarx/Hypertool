<?php

namespace Hypertool\Html;

class Applet extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('applet');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$applet = new Applet('Sample content');
echo $applet->output();

// Using the static factory method
$applet2 = HtmlElement::applet('Sample content');
echo $applet2->output();
*/