<?php
class Sup extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('sup');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$sup = new Sup('Sample content');
echo $sup->output();

// Using the static factory method
$sup2 = HtmlElement::sup('Sample content');
echo $sup2->output();
*/