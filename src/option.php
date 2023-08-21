<?php
class Option extends HtmlElement {
    public function __construct($value, $text = '') {
        parent::__construct('option');
        $this->setValue($value);
        $this->text($text);
    }
}

// Usage example
// $option = new Option('value1', 'Option 1');
// $option->setId('optionID')->setClass('optionClass');
// 
// echo $option->output();
