<?php

namespace Hypertool\Html;

class Colgroup extends HtmlElement {
    public function __construct() {
        parent::__construct('colgroup');
    }

    public function addCol($identity = null, $span = 1) {
        return $this->add_child($identity,'col')->setColspan($span);
    }
}

// Usage example
// $colgroup = new Colgroup();
// $colgroup->addCol('group1',2); // Adds a <col> element with a colspan of 2
// $colgroup->addCol('group2');  // Adds a <col> element with a default colspan of 1
// 
// echo $colgroup->output();

/*
Usage example:

// Using the class directly
$colgroup = new Colgroup('Sample content');
echo $colgroup->output();

// Using the static factory method
$colgroup2 = HtmlElement::colgroup('Sample content');
echo $colgroup2->output();
*/