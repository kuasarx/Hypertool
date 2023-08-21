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