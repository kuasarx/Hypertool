<?php

namespace Hypertool\Html;

class Tr extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('tr');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$tr = new Tr('Sample content');
echo $tr->output();

// Using the static factory method
$tr2 = HtmlElement::tr('Sample content');
echo $tr2->output();
*/