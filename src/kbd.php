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
