<?php
class Spacer extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('spacer');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$spacer = new Spacer('Sample content');
echo $spacer->output();

// Using the static factory method
$spacer2 = HtmlElement::spacer('Sample content');
echo $spacer2->output();
*/