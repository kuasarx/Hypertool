<?php
class Bdi extends HtmlElement {
    public function __construct($text) {
        parent::__construct('bdi');
        $this->text($text);
    }
}

// Usage example
// $bdi = new Bdi('Hello, world!');
// echo $bdi->output();
/*
Usage example:

// Using the class directly
$bdi = new Bdi('Sample content');
echo $bdi->output();

// Using the static factory method
$bdi2 = HtmlElement::bdi('Sample content');
echo $bdi2->output();
*/