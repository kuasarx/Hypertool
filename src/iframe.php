<?php
class Iframe extends HtmlElement {
    public function __construct() {
        parent::__construct('iframe'); // Set the tag name to 'iframe'
    }
    // Add more methods for other attributes as needed for the <iframe> element
}

// Usage example
// $iframe = new Iframe();
// $iframe->setSrc('https://www.example.com')
//       ->setWidth('800px')
//       ->setHeight('600px')
//       ->setClass('iframe-class');
// 
// echo $iframe->output();
