<?php
class Ul extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('ul');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$ul = new Ul('Sample content');
echo $ul->output();

// Using the static factory method
$ul2 = HtmlElement::ul('Sample content');
echo $ul2->output();
*/