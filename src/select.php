<?php
class Select extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('select');
        if ($content) {
            $this->text($content);
        }
    }
}

/*
Usage example:

// Using the class directly
$select = new Select('Sample content');
echo $select->output();

// Using the static factory method
$select2 = HtmlElement::select('Sample content');
echo $select2->output();
*/