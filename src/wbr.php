<?php
class Wbr extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('wbr');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$wbr = new Wbr('Sample content');
echo $wbr->output();

// Using the static factory method
$wbr2 = HtmlElement::wbr('Sample content');
echo $wbr2->output();
*/