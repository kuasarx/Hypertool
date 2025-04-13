<?php
class Tfoot extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('tfoot');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$tfoot = new Tfoot('Sample content');
echo $tfoot->output();

// Using the static factory method
$tfoot2 = HtmlElement::tfoot('Sample content');
echo $tfoot2->output();
*/