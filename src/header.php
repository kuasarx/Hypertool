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
