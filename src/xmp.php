<?php
class Xmp extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('xmp');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$xmp = new Xmp('Sample content');
echo $xmp->output();

// Using the static factory method
$xmp2 = HtmlElement::xmp('Sample content');
echo $xmp2->output();
*/