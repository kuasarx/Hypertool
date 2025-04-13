<?php
class B extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('b');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$b = new B('Bold text');
echo $b->output();

// Using the static factory method
$b2 = HtmlElement::b('Bold text');
echo $b2->output();
*/