<?php
class Object extends HtmlElement {
    public function __construct() {
        parent::__construct('object');
    }
    // Add more methods for other attributes specific to <object> if needed
}

// Usage example
// $htmlObject = new Object();
// $htmlObject->setData('video.mp4')->setType('video/mp4')->setWidth('640')->setHeight('360');
// 
// echo $htmlObject->output();
