<?php

namespace Hypertool\Html;

class Audio extends HtmlElement {
    public function __construct() {
        parent::__construct('audio');
    }

    public function setSrc($src) {
        $this->attributes['src'] = $src;
        return $this;
    }

    public function setControls($controls) {
        $this->attributes['controls'] = $controls;
        return $this;
    }

    // Add more methods specific to the <audio> element if needed
}
/**
$audio = new Audio();
$audio->setSrc('audio.mp3')->setControls(true);

echo $audio->output();
 */
/*
Usage example:

// Using the class directly
$audio = new Audio('Sample content');
echo $audio->output();

// Using the static factory method
$audio2 = HtmlElement::audio('Sample content');
echo $audio2->output();
*/