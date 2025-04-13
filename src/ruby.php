<?php
class Ruby extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('ruby');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$ruby = new Ruby('Sample content');
echo $ruby->output();

// Using the static factory method
$ruby2 = HtmlElement::ruby('Sample content');
echo $ruby2->output();
*/