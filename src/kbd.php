<?php
class Kbd extends HtmlElement {
    public function __construct() {
        parent::__construct('kbd');
    }

    public function setKey($keys) {
        $this->content = $keys; // Set the content of the <kbd> element to the keys
        return $this;
    }
}

// Usage example
// $kbd = new Kbd();
// $kbd->setKey('Ctrl');
// 
// echo $kbd->output();

/*
Usage example:

// Using the class directly
$kbd = new Kbd('Sample content');
echo $kbd->output();

// Using the static factory method
$kbd2 = HtmlElement::kbd('Sample content');
echo $kbd2->output();
*/