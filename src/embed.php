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

/*
Usage example:

// Using the class directly
$embed = new Embed('Sample content');
echo $embed->output();

// Using the static factory method
$embed2 = HtmlElement::embed('Sample content');
echo $embed2->output();
*/