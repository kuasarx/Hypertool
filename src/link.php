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