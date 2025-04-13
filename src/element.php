<?php
class Element extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('element');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$element = new Element('Sample content');
echo $element->output();

// Using the static factory method
$element2 = HtmlElement::element('Sample content');
echo $element2->output();
*/