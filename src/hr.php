<?php
class HrElement extends HtmlElement {
    public function __construct() {
        parent::__construct('hr');
    }
}

// Usage example
// $hr = new HrElement();
// echo $hr->output(); // Outputs: "<hr>"
