<?php
class Meter extends HtmlElement {
    public function __construct($value = null, $min = null, $max = null) {
        parent::__construct('meter');
        if ($value !== null) {
            $this->setValue($value);
        }
        if ($min !== null) {
            $this->setMin($min);
        }
        if ($max !== null) {
            $this->setMax($max);
        }
    }
}

// Usage example
// $meter = new Meter(75, 0, 100);
// $meter->setClass('meter-class')->setId('meter-id');
// 
// echo $meter->output();
/*
Usage example:

// Using the class directly
$meter = new Meter('Sample content');
echo $meter->output();

// Using the static factory method
$meter2 = HtmlElement::meter('Sample content');
echo $meter2->output();
*/