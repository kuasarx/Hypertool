<?php
class H extends HtmlElement {
    public function __construct($level) {
        parent::__construct("h$level");
    }
}

// Usage example
// $heading = new H(1); // Create an <h1> element
// $heading->setText("Hello, World!"); // Set the text content of the heading
// 
// echo $heading->output();
