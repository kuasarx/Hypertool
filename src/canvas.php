<?php

namespace Hypertool\Html;

class Canvas extends HtmlElement {
    public function __construct() {
        parent::__construct('canvas');
    }

    public function setWidth($width) {
        $this->attributes['width'] = $width; // Set the 'width' attribute for the canvas element
        return $this;
    }

    public function setHeight($height) {
        $this->attributes['height'] = $height; // Set the 'height' attribute for the canvas element
        return $this;
    }
}

// Usage example
// $canvas = new Canvas();
// $canvas->setWidth(800)->setHeight(600); // Set canvas dimensions
// 
// echo $canvas->output();

/*
Usage example:

// Using the class directly
$canvas = new Canvas('Sample content');
echo $canvas->output();

// Using the static factory method
$canvas2 = HtmlElement::canvas('Sample content');
echo $canvas2->output();
*/