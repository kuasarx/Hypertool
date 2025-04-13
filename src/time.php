<?php
class Time extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('time');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$time = new Time('Sample content');
echo $time->output();

// Using the static factory method
$time2 = HtmlElement::time('Sample content');
echo $time2->output();
*/