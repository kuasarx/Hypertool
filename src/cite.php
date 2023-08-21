<?php
class Cite extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('cite');
        $this->setContent($content);
    }
}

// Usage example
// $cite = new Cite('Quotation text');
// $cite->setClass('quotation'); // Add class attribute
// 
// echo $cite->output();
