<?php
class Pre extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('pre');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$pre = new Pre('Sample content');
echo $pre->output();

// Using the static factory method
$pre2 = HtmlElement::pre('Sample content');
echo $pre2->output();
*/