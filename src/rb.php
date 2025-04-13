<?php
class Rb extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('rb');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$rb = new Rb('Sample content');
echo $rb->output();

// Using the static factory method
$rb2 = HtmlElement::rb('Sample content');
echo $rb2->output();
*/