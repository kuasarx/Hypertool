<?php

namespace Hypertool\Html;

class Col extends HtmlElement {
    public function __construct() {
        parent::__construct('col'); // Call parent constructor with the tag name 'col'
    }

    public function setSpan($span) {
        $this->attributes['span'] = $span; // Set the 'span' attribute for the col element
        return $this;
    }
}

// Usage example
// $col = new Col();
// $col->setSpan(2);
// 
// echo $col->output(); // Output the generated <col> element

/*
Usage example:

// Using the class directly
$col = new Col('Sample content');
echo $col->output();

// Using the static factory method
$col2 = HtmlElement::col('Sample content');
echo $col2->output();
*/