<?php
class I extends HtmlElement {
    public function __construct() {
        parent::__construct('hr');
    }
}

// Usage example
// $hr = new I();
// echo $hr->output(); // Outputs: "<i></i>"