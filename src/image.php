<?php
class Image extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('image');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$image = new Image('Sample content');
echo $image->output();

// Using the static factory method
$image2 = HtmlElement::image('Sample content');
echo $image2->output();
*/