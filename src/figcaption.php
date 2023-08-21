<?php
class Figcaption extends HtmlElement {
    public function __construct() {
        parent::__construct('figcaption');
    }
}

// Usage example
// $figcaption = new Figcaption();
// $figcaption->setCaption('Image Caption');
// 
// echo $figcaption->output();