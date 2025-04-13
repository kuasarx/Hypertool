<?php

namespace Hypertool\Html;

class Caption extends HtmlElement {
    public function __construct() {
        parent::__construct('caption');
    }
    
    public function setText($text) {
        $this->content = $text; // Set the text content for the <caption> element
        return $this;
    }
}

// Usage example
// $caption = new Caption();
// $caption->setText('Table Caption');
// 
// echo $caption->output();

/*
Usage example:

// Using the class directly
$caption = new Caption('Sample content');
echo $caption->output();

// Using the static factory method
$caption2 = HtmlElement::caption('Sample content');
echo $caption2->output();
*/