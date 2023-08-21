<?php
class Dt extends HtmlElement {
    public function __construct($term) {
        parent::__construct('dt');
        $this->text($term); // Set the content of the <dt> element
    }
}

// Usage example
// $dt = new Dt('Definition Term');
//
// echo $dt->output();
