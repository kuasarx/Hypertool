<?php
class Font extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('font');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$font = new Font('Sample content');
echo $font->output();

// Using the static factory method
$font2 = HtmlElement::font('Sample content');
echo $font2->output();
*/