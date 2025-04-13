<?php
class Center extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('center');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$center = new Center('Sample content');
echo $center->output();

// Using the static factory method
$center2 = HtmlElement::center('Sample content');
echo $center2->output();
*/