<?php

namespace Hypertool\Html;

class Bdo extends HtmlElement {
    public function __construct($dir, $content = '') {
        parent::__construct('bdo');
        $this->attributes['dir'] = $dir;
        $this->content = $content;
    }
}

// Usage example
// $bdo = new Bdo('rtl', 'Text with right-to-left direction');
// echo $bdo->output();

/*
Usage example:

// Using the class directly
$bdo = new Bdo('Sample content');
echo $bdo->output();

// Using the static factory method
$bdo2 = HtmlElement::bdo('Sample content');
echo $bdo2->output();
*/