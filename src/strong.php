<?php
class Strong extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('strong');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$strong = new Strong('Sample content');
echo $strong->output();

// Using the static factory method
$strong2 = HtmlElement::strong('Sample content');
echo $strong2->output();
*/