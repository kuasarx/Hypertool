<?php
class Div extends HtmlElement {
    public function __construct() {
        parent::__construct('div');
    }
}

// Usage
// $div = new Div();
// $div->setId('myDiv')->setClass('custom-class');
// 
// echo $div->output();

/*
Usage example:

// Using the class directly
$div = new Div('Sample content');
echo $div->output();

// Using the static factory method
$div2 = HtmlElement::div('Sample content');
echo $div2->output();
*/