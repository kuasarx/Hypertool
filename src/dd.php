<?php
class Dd extends HtmlElement {
    public function __construct() {
        parent::__construct('dd'); // Set the tag name to 'dd'
    }
}

// Usage example
// $dd = new Dd();
// $dd->setText('Description of the term');
// 
// echo $dd->output();
