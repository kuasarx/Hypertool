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