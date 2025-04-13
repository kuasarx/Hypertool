<?php
class Isindex extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('isindex');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$isindex = new Isindex('Sample content');
echo $isindex->output();

// Using the static factory method
$isindex2 = HtmlElement::isindex('Sample content');
echo $isindex2->output();
*/