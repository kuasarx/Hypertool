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

/*
Usage example:

// Using the class directly
$cite = new Cite('Sample content');
echo $cite->output();

// Using the static factory method
$cite2 = HtmlElement::cite('Sample content');
echo $cite2->output();
*/