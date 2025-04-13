<?php

namespace Hypertool\Html;

class Dfn extends HtmlElement {
    public function __construct($content = '') {
        parent::__construct('dfn');
        $this->content = $content;
    }

    public function setDefinition($definition) {
        $this->attributes['title'] = $definition; // Set the 'title' attribute for the dfn element
        return $this;
    }
}

// Usage example
// $dfn = new Dfn('Abbreviation');
// $dfn->setDefinition('A shortened form of a word.');
// echo $dfn->output();

/*
Usage example:

// Using the class directly
$dfn = new Dfn('Sample content');
echo $dfn->output();

// Using the static factory method
$dfn2 = HtmlElement::dfn('Sample content');
echo $dfn2->output();
*/