<?php

namespace Hypertool\Html;

class Meta extends HtmlElement {
    public function __construct($name, $content) {
        parent::__construct('meta');
        $this->setName($name);
        $this->setContent($content);
    }
}

// Usage example
// $meta = new Meta('description', 'This is a meta description.');
// echo $meta->output();

/*
Usage example:

// Using the class directly
$meta = new Meta('Sample content');
echo $meta->output();

// Using the static factory method
$meta2 = HtmlElement::meta('Sample content');
echo $meta2->output();
*/