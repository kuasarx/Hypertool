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
