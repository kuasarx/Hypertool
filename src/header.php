<?php
class Header extends HtmlElement {
    public function __construct() {
        parent::__construct('header'); // Call the parent constructor with 'header' as the tag name
    }
}

// Usage example
// $header = new Header();
// $header->setClass('header-class')->setText('Welcome to our website');
// 
// echo $header->output();

/*
Usage example:

// Using the class directly
$header = new Header('Sample content');
echo $header->output();

// Using the static factory method
$header2 = HtmlElement::header('Sample content');
echo $header2->output();
*/