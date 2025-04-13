<?php
class Video extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('video');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$video = new Video('Sample content');
echo $video->output();

// Using the static factory method
$video2 = HtmlElement::video('Sample content');
echo $video2->output();
*/