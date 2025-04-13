<?php
class Nobr extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('nobr');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$nobr = new Nobr('Sample content');
echo $nobr->output();

// Using the static factory method
$nobr2 = HtmlElement::nobr('Sample content');
echo $nobr2->output();
*/