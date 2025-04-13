<?php
class Samp extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('samp');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$samp = new Samp('Sample content');
echo $samp->output();

// Using the static factory method
$samp2 = HtmlElement::samp('Sample content');
echo $samp2->output();
*/