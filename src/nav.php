<?php
class Nav extends HtmlElement {
    public function __construct() {
        parent::__construct('nav');
    }
}

// Usage example
// $nav = new Nav();
// $nav->setId('main-nav')->setClass('navigation');
// 
// echo $nav->output();

/*
Usage example:

// Using the class directly
$nav = new Nav('Sample content');
echo $nav->output();

// Using the static factory method
$nav2 = HtmlElement::nav('Sample content');
echo $nav2->output();
*/