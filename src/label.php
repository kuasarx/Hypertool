<?php
class Label extends HtmlElement {
    public function __construct($for, $text) {
        parent::__construct('label');
        $this->setFor($for)->text($text);
    }
}

// Usage example
// $label = new Label('inputId', 'Label Text');
// echo $label->output();

/*
Usage example:

// Using the class directly
$label = new Label('Sample content');
echo $label->output();

// Using the static factory method
$label2 = HtmlElement::label('Sample content');
echo $label2->output();
*/