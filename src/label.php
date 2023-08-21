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
