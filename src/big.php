<?php
class Big extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('big');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$big = new Big('Sample content');
echo $big->output();

// Using the static factory method
$big2 = HtmlElement::big('Sample content');
echo $big2->output();
*/