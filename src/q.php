<?php
class Q extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('q');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$q = new Q('Sample content');
echo $q->output();

// Using the static factory method
$q2 = HtmlElement::q('Sample content');
echo $q2->output();
*/