<?php
class HrElement extends HtmlElement {
    public function __construct() {
        parent::__construct('hr');
    }
}

// Usage example
// $hr = new HrElement();
// echo $hr->output(); // Outputs: "<hr>"

/*
Usage example:

// Using the class directly
$hr = new HrElement('Sample content');
echo $hr->output();

// Using the static factory method
$hr2 = HtmlElement::hr('Sample content');
echo $hr2->output();
*/