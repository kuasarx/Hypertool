<?php
class Fieldset extends HtmlElement {
    public function __construct() {
        parent::__construct('fieldset');
    }

    public function setLegend($legend) {
        $legendElement = $this->add_child('legend', 'legend');
        $legendElement->text($legend);
        return $this;
    }
}

// Usage example
// $fieldset = new Fieldset();
// $fieldset->setLegend('My Fieldset Legend')
//          ->setClass('my-fieldset-class')
//          ->setId('my-fieldset-id');
// 
// echo $fieldset->output();
/*
Usage example:

// Using the class directly
$fieldset = new Fieldset('Sample content');
echo $fieldset->output();

// Using the static factory method
$fieldset2 = HtmlElement::fieldset('Sample content');
echo $fieldset2->output();
*/