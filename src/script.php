<?php

namespace Hypertool\Html;

class Script extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('script');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$script = new Script('Sample content');
echo $script->output();

// Using the static factory method
$script2 = HtmlElement::script('Sample content');
echo $script2->output();
*/