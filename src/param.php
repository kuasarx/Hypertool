<?php

namespace Hypertool\Html;

class Param extends HtmlElement {
    public function __construct($name, $value) {
        parent::__construct('param');
        $this->setName($name)->setValue($value);
    }
}

// Usage example
// $param = new Param('movie', 'movie.mp4');
// 
// echo $param->output();
/*
Usage example:

// Using the class directly
$param = new Param('Sample content');
echo $param->output();

// Using the static factory method
$param2 = HtmlElement::param('Sample content');
echo $param2->output();
*/