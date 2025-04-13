<?php

namespace Hypertool\Html;

class Title extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('title');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$title = new Title('Sample content');
echo $title->output();

// Using the static factory method
$title2 = HtmlElement::title('Sample content');
echo $title2->output();
*/