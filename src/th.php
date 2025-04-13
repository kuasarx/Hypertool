<?php
class Th extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('th');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$th = new Th('Sample content');
echo $th->output();

// Using the static factory method
$th2 = HtmlElement::th('Sample content');
echo $th2->output();
*/