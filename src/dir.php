<?php

namespace Hypertool\Html;

class Dir extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('dir');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$dir = new Dir('Sample content');
echo $dir->output();

// Using the static factory method
$dir2 = HtmlElement::dir('Sample content');
echo $dir2->output();
*/