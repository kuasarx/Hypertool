<?php
class Embed extends HtmlElement {
    public function __construct($src) {
        parent::__construct('embed');
        $this->setSrc($src);
    }

}

// Usage example
// $embed = new Embed('example.swf');
// $embed->setType('application/x-shockwave-flash')
//       ->setWidth(400)
//       ->setHeight(300);
// 
// echo $embed->output();
