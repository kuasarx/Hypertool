<?php
class Plaintext extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('plaintext');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$plaintext = new Plaintext('Sample content');
echo $plaintext->output();

// Using the static factory method
$plaintext2 = HtmlElement::plaintext('Sample content');
echo $plaintext2->output();
*/