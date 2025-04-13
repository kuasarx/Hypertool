<?php

namespace Hypertool\Html;

class Ol extends HtmlElement {
    public function __construct() {
        parent::__construct('ol');
    }

    public function addItem($identifier, $content) {
        $this->add_child($identifier, 'li')->text($content);
        return $this;
    }
}

// Usage example
// $ol = new Ol();
// $ol->addItem('Item-1','Item 1')
//    ->addItem('Item-2','Item 2')
//    ->addItem('Item-3','Item 3');
// 
// echo $ol->output();

/*
Usage example:

// Using the class directly
$ol = new Ol('Sample content');
echo $ol->output();

// Using the static factory method
$ol2 = HtmlElement::ol('Sample content');
echo $ol2->output();
*/