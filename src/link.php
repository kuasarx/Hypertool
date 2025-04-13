<?php
class Link extends HtmlElement {
    public function __construct() {
        parent::__construct('link'); // Initialize with the 'link' tag
    }
    // Add more methods for other link-specific attributes if needed
}

// Usage example
// $link = new Link();
// $link->setHref('styles.css')->setRel('stylesheet')->setType('text/css');
// 
// echo $link->output();
/*
Usage example:

// Using the class directly
$link = new Link('Sample content');
echo $link->output();

// Using the static factory method
$link2 = HtmlElement::link('Sample content');
echo $link2->output();
*/