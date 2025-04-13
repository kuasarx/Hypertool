<?php
class Textarea extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('textarea');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$textarea = new Textarea('Sample content');
echo $textarea->output();

// Using the static factory method
$textarea2 = HtmlElement::textarea('Sample content');
echo $textarea2->output();
*/