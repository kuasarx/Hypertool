<?php
class Noframes extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('noframes');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$noframes = new Noframes('Sample content');
echo $noframes->output();

// Using the static factory method
$noframes2 = HtmlElement::noframes('Sample content');
echo $noframes2->output();
*/