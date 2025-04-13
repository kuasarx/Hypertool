<?php

namespace Hypertool\Html;

class Track extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('track');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$track = new Track('Sample content');
echo $track->output();

// Using the static factory method
$track2 = HtmlElement::track('Sample content');
echo $track2->output();
*/