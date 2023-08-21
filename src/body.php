<?php
class Body extends HtmlElement {
    public function __construct() {
        parent::__construct('body'); // Call the parent constructor with 'body' as the tag name
    }

    // You can add specific methods for body attributes if needed
    public function setOnLoad($onload) {
        $this->attributes['onload'] = $onload;
        return $this;
    }

    public function setOnUnload($onunload) {
        $this->attributes['onunload'] = $onunload;
        return $this;
    }

    // Add more methods for other body-specific attributes
}

/**
$body = new Body();
$body->setOnLoad('loadFunction()')
     ->setOnUnload('unloadFunction()')
     // ... set more attributes as needed
     ->add_child('header', 'h1')
     ->text('Hello, World!')
     ->setClass('my-class');

echo $body->output();
 */