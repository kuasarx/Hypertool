<?php

namespace Hypertool\Html;

class Slot extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('slot');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$slot = new Slot('Sample content');
echo $slot->output();

// Using the static factory method
$slot2 = HtmlElement::slot('Sample content');
echo $slot2->output();
*/