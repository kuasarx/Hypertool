<?php
class Footer extends HtmlElement {
    public function __construct() {
        parent::__construct('footer'); // Call the parent constructor with 'footer' as the tag name
    }

    // You can add specific methods for <footer> attributes or behaviors here
}

// Usage example
// $footer = new Footer();
// $footer->setId('footerID')->setClass('footerClass')->text('This is the footer content.');
// 
// echo $footer->output();
