<?php
class Strike extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('strike');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$strike = new Strike('Sample content');
echo $strike->output();

// Using the static factory method
$strike2 = HtmlElement::strike('Sample content');
echo $strike2->output();
*/