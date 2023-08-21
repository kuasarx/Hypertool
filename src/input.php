<?php
class Input extends HtmlElement {
    public function __construct() {
        parent::__construct('input');
    }
    // Add more methods for other attributes specific to <input> elements
}

// Usage example
// $input = new Input();
// $input->setType('text')->setName('username')->setPlaceholder('Enter your username');
// 
// echo $input->output(); // Output the generated <input> element
