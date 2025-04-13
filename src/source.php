<?php
class Source extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('source');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$source = new Source('Sample content');
echo $source->output();

// Using the static factory method
$source2 = HtmlElement::source('Sample content');
echo $source2->output();
*/